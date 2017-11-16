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

class ProblemController extends Controller
{

    /**
     * @Route("/locations/addproblem", name="admin_submit_problem")
     */
    public function newProblemAction(Request $request) {
        $problemMessage = new ProblemMessage(null, 0, 1, "", "", new \DateTime('now'), false);
        $form = $this->createForm(ProblemType::class, $problemMessage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var File $file */
            $file = $problemMessage->getImage();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            $file->move(
                $this->getParameter('problem_images'),
                $fileName
            );


            $problemMessage->setImage($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($problemMessage);
            $em->flush();
            return $this->redirect($this->generateUrl('locations'), 301);
        } else {
            return $this->render('default/add.problem.html.twig', array('form' => $form->createView()));
        }
    }
}
