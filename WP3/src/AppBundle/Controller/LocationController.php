<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Location;
use AppBundle\Entity\ProblemMessage;
use AppBundle\Entity\StatusMessage;
use AppBundle\Form\ProblemType;
use AppBundle\Repository\ProblemMessageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;

class LocationController extends Controller
{

    /**
     * @Route("/locations", name="locations")
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
            array("success" => True, "locations" => $locations));
    }

    /**
     * @Route("location/{id}", name="location")
     */
    public function locationAction($id=1)
    {
        $em = $this->getDoctrine()->getManager();
        $problemMessages = $em->getRepository(ProblemMessage::class)
            ->findBy(array('locationId' => $id));

        foreach ($problemMessages as $problemMessage){
            //$problemMessageProblem = $problemMessage->getProblem();

        }


        $statusMessages = $em->getRepository(StatusMessage::class)
            ->findBy(array('locationId' => $id));

        return $this->render(
            'default/location.html.twig',
            array("success" => True, "problemMessages" => $problemMessages, "statusMessages" => $statusMessages));
    }
}
