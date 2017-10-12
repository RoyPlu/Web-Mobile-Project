<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Location;
use AppBundle\Entity\ProblemMessage;
use AppBundle\Repository\ProblemMessageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LocationController extends Controller
{

    /**
     * @Route("/locations")
     */
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $locations = $em->getRepository(Location::class)
            ->findAll();

        foreach ($locations as $location){
           $locationId = $location->getId();

           $problemMessages = $em->getRepository(ProblemMessage::class)
               ->find($locationId);

            $location->setProblemMessages($problemMessages);
        }




        return $this->render(
            'default/locations.html.twig',
            array("success" => True, "locations" => $locations, "problemMessages" => $problemMessages));
    }

    /**
     * @Route("location/{id}")
     */
    public function locationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $problemMessages = $em->getRepository(ProblemMessage::class)
            ->findBy(array('locationId' => $id));

        foreach ($problemMessages as $problemMessage){
            //$problemMessageProblem = $problemMessage->getProblem();

        }

        return $this->render(
            'default/location.html.twig',
            array("success" => True, "problemMessages" => $problemMessages));
    }
}
