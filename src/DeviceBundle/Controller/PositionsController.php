<?php

namespace DeviceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PositionsController extends Controller
{
    public function listAction($device_id,$from_utctime,$to_utctime,$limit){
        
        //var_dump($device_id,$from_utctime,$to_utctime,$limit);
        
        $em = $this->getDoctrine()->getManager();
        
        $positions_repo = $em->getRepository('DeviceBundle:Positions');
        
        
        $criteria = new \Doctrine\Common\Collections\Criteria();
        $criteria->where($criteria->expr()->eq('deviceId', $device_id));
        if (!is_null($from_utctime))
        {
            $criteria->where($criteria->expr()->gte('utctime', new \DateTime($from_utctime)));
        }
        if (!is_null($to_utctime))
        {
            $criteria->where($criteria->expr()->lte('utctime', new \DateTime($to_utctime)));
        }
        $positions = $positions_repo->matching($criteria);
        
        foreach ($positions as $position){
            $position->setUtctime(
                    $position->getUtctime()->setTimezone(new \DateTimeZone('Europe/Berlin'))
            );
        }
        
        $serializer = $this->container->get('jms_serializer');
        $reports = $serializer->serialize($positions, 'json');
        return new Response($reports);
       
    }
}
