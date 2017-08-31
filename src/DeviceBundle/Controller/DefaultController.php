<?php

namespace DeviceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class DefaultController extends Controller
{
    public function indexAction()
    {
        
        var_dump('test');
        die();
        
        $em = $this->getDoctrine()->getManager();
    
        $repo = $em->getRepository('DeviceBundle:Device');

        $devices = $repo->findBy(array(
            'id' => array(1,2,3)
        ),array('id' => 'ASC'));
        
        $devices []= array('id' => 1, 'name' => 'My GPS 1',
            'user_id' => 1, 'devicetype_id' => 1, 'icon' => '');
        
        
        return $this->render(
                'DeviceBundle:Default:index.html.twig',
                array('devices' => $devices)
        );
    }
}
