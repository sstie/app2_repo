<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\HttpFoundation\Request;

class AuthController extends Controller
{
    public function loginAction(Request $request)
    {
        $session = $request->getSession();

        $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
        $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
                
        $securityContext = $this->container->get('security.authorization_checker');
        
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED') 
                || $securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
            // authenticated REMEMBERED, FULLY will imply REMEMBERED (NON anonymous)
            return $this->redirectToRoute('user_live');
        }
                
        return $this->render(
            'UserBundle:Auth:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $session->get(SecurityContextInterface::LAST_USERNAME),
                'error'         => $error,
            )
        );
        
    }
    
    
    
    
    public function loginCheckAction()
    {
        //Nothing to do here
    }
    
    public function logoutAction()
    {
        //Nothing to do here
    }    
}