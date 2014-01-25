<?php

namespace Locazik\UserBundle\Component\Authentification\Handler;

use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;

class LoginHandler implements AuthenticationFailureHandlerInterface, AuthenticationSuccessHandlerInterface
{

    protected $router;
    protected $security;

    public function __construct(Router $router, SecurityContext $security) 
    {
        $this->router = $router;
        $this->security = $security;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token) 
    {
        $referer = $request->headers->get('referer');
        /* if (strpos($referer,'annonce/identification') !== false) 
          {

          } */
        return new RedirectResponse($referer);
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        $referer = $request->headers->get('referer');
        $request->getSession()->getFlashBag()->add('error', $exception->getMessage());

        return new RedirectResponse($referer);
    }

}
