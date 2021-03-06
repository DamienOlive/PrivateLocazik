<?php

namespace Locazik\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Locazik\UserBundle\Form\Type\UserRegistrationType;
use Locazik\UserBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

class UserController extends Controller
{
    public function identificationConfirmAnnonceAction($annonceKey)
    {        
        // Si l'utilisateur est connecté
        if ($this->container->get('security.context')->isGranted('ROLE_USER'))
        {
            $user = $this->get('security.context')->getToken()->getUser();
            $result = $this->get('annonce_manager')->insertUserAnnonce($annonceKey, $user);
            if($result)
            {
                return $this->redirect($this->generateUrl('locazik_annonce_confirmer'));
            }
        }
        
        $user = new User();
        $formRegistration = $this->createForm(new UserRegistrationType('Locazik\UserBundle\Entity\User'), $user);
        
        $request = $this->get('request');
        
        // Si l'utilisateur valide le formulaire d'inscription
        // pour la connexion, un handlerconnexion gère la redirection sur la page courante
        if($request->getMethod() === 'POST')
        {
            $formRegistration->bind($request);
            if($formRegistration->isValid())
            {
                $userManager = $this->get('fos_user.user_manager');
                $user->setEnabled(true);
                $userManager->updateUser($user);

                $providerKey = $this->container->getParameter('fos_user.firewall_name');
                $token = new UsernamePasswordToken($user, null, $providerKey, $user->getRoles());
                $this->container->get('security.context')->setToken($token);

                $event = new InteractiveLoginEvent($request, $token);
                $this->get("event_dispatcher")->dispatch("security.authentication", $event);

                $this->sendRegistrationEmail($user);

                return $this->redirect($request->headers->get('referer')); 
            }
        }
        
        $csrfToken = $this->container->has('form.csrf_provider')
            ? $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate')
            : null;
        
        return $this->render('LocazikUserBundle:Identification:identification.html.twig', 
                            array('formRegistration' => $formRegistration->createView(), 
                                  'csrf_token' => $csrfToken));
    }
    
    private function sendRegistrationEmail($user)
    {
        if($user)
        {
            $email = $user->getEmail();
            $username = $user->getUsername();
            
            $message = \Swift_Message::newInstance()
                        ->setSubject('Locazik - Confirmation Inscription')
                        ->setFrom($this->container->getParameter('mailer_adress'))
                        ->setTo($user->getEmail())
                        ->setBody($this->renderView('LocazikUserBundle:Email:confirmation.txt.twig', 
                                                        array('username' => $username, 'mail' => $email)));
            $this->get('mailer')->send($message);
        }
    }
}
