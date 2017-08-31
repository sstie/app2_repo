<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name,$index)
    {
        /*
        $response = new Response(json_encode(array($name,$index)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
        */
        return $this->render(
                'UserBundle:Default:index.html.twig',
                array('devices'=>$name,'index'=>$index)
        );
    }
    
    public function liveAction()
    { 
        
        $securityContext = $this->container->get('security.authorization_checker');
        
        //var_dump($securityContext);
        
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            // authenticated REMEMBERED, FULLY will imply REMEMBERED (NON anonymous)
            
            var_dump('IS_AUTHENTICATED_REMEMBERED');
        }
        
        if ($securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
            // authenticated REMEMBERED, FULLY will imply REMEMBERED (NON anonymous)
            
            var_dump('IS_AUTHENTICATED_FULLY');
        }
        
        $usr = $this->get('security.context')->getToken()->getUser();
        
        //var_dump($usr);
        var_dump($usr->getId());
        var_dump($usr->getUsername());
        var_dump($usr->getAdmin());
        
        $em = $this->getDoctrine()->getManager(); 
        
        $devices_repo = $em->getRepository('DeviceBundle:Device');

        $devices = $devices_repo->findBy(
            array(
                'userId' => array(1)
            ),
            array('id' => 'ASC')
        );
        
        return $this->render(
                'UserBundle:Default:live.html.twig',
                array('devices' => $devices)
        );
    }
}
