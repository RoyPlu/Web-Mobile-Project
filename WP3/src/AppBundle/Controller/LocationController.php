<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Location;
use AppBundle\Entity\ProblemMessage;
use AppBundle\Entity\StatusMessage;
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
        $formData = $request->get('problem_add_form');
        $id = $formData['technicianId'];
        $username = $formData['username'];
        $password = $formData['plainPassword']['first'];
        $em = $this->getDoctrine()->getManager();
        $usersRepository = $em->getRepository(User::class);

        $technician = $usersRepository->find($id);
        if(\is_null($technician)) {
            return $this->redirect($this->generateUrl('admin_area', array('error' => 'Technician could not be found, please try again or contact Super Admin.')), 301);
        }

        $form = $this->createFormBuilder($technician)
            ->add($id, 'text')
            ->add($username, 'text')
            ->add($password, 'password')
            ->getForm();

        if ($request->getMethod() == 'POST') {

            $form->bindRequest($request);

            if ($form->isValid()){

            }
            $em->flush();
            return $this->redirect($this->generateUrl('cursoTaskBundle_task_success', array('nombreTarea' => $task->getTask()) ));
        }
    }
}
