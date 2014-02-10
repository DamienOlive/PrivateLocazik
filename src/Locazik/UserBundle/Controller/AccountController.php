<?php

namespace Locazik\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Locazik\UserBundle\Entity\User;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class AccountController extends Controller
{
    public function showAction()
    {
        $user = $this->getUser();
        $data['nbAnnoncesOnline'] = $this->get('annonce_manager')->countAnnoncesFromUser($user);
        return $this->render('LocazikUserBundle:Account:show.html.twig', array('user' => $user, 'data' => $data));
    }
    
    public function listerAnnonceAction()
    {
        $user = $this->getUser();
        $listeAnnonces = $this->get('annonce_manager')->findAllBy(array('user' => $user));
        return $this->render('LocazikUserBundle:Account:listeAnnonces.html.twig', array('listeAnnonces' => $listeAnnonces));
    }
    
    public function getUser()
    {
        $user = $this->get('security.context')->getToken()->getUser();
        if (!is_object($user)) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        return $user;
    }
    
    
    
    
    
    
    /*
    public function editAction(Request $request)
    {
        $user = $this->getUser();
        $dispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        $formFactory = $this->get('fos_user.profile.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);

        if ('POST' === $request->getMethod()) {
            $form->bind($request);

            if ($form->isValid()) {
                $userManager = $this->get('fos_user.user_manager');

                $event = new FormEvent($form, $request);
                $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

                $userManager->updateUser($user);

                if (null === $response = $event->getResponse()) {
                    $url = $this->generateUrl('fos_user_profile_show');
                    $response = new RedirectResponse($url);
                }

                $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

                return $response;
            }
        }

        return $this->render('LocazikUserBundle:Account:edit.html.twig', array('form' => $form->createView()));
    }
     */
    
    
}