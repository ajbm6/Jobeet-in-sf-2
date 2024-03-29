<?php

namespace Application\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller,
    Symfony\Component\Security\SecurityContext;

class AuthController extends Controller
{
    public function loginAction()
    {
        // get the error if any (works with forward and redirect -- see below)
        if ($this->get('request')->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $this->get('request')->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $this->get('request')->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render('SecurityBundle:Auth:login.twig', array(
            // last username entered by the user
            'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));       
    }
    
    public function logincheckAction()
    {
        if(!$this->container->get('security.context')->isAuthenticated()) {
             $this->loginAction();   
        }        
        
        return $this->createResponse('Authenticated');
    }
}
