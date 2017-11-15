<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Location;
use AppBundle\Entity\ProblemMessage;
use AppBundle\Entity\StatusMessage;
use AppBundle\Form\ProblemType;
use AppBundle\Repository\ProblemMessageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

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
            array("success" => True, "locations" => $locations));
    }

    /**
     * @Route("location/{id}")
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

    /**
     * @Route("location/1/addproblem")
     */
    public function addProblemAction()
    {

        return $this->render('default/add.problem.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/location/1/addproblem/submit", name="admin_submit_problem")
     */
    public function problemAddAction(Request $request, $id=1) {
        // 1) build the form
        $problem = new ProblemMessage();
        $form = $this->createForm(ProblemType::class, $problem);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            //$password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            //$user->setPassword($password);

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($problem);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('default/index.html.twig');
        }

        return $this->render(
            'default/index.html.twig',
            array('form' => $form->createView())
        );
    }
}
