<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{

        /**
         * @Route("/admin", name="admin_area")
         */
        public function adminAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $role = 'ROLE_TECH';

        $qb->select('user')
            ->from(User::class, 'user')
            ->Where('user.roles LIKE :roles')
            ->setParameter('roles', '%"' . $role . '"%');

        $allTechnicians = $qb->getQuery()->getResult();

        $unsuccessfully_added_tech = $request->get('unsuccessfully_added_tech');

        return $this->render('default/admin.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'technicians_list' => $allTechnicians,
            'unsuccessfully_added_tech' => $unsuccessfully_added_tech,
        ]);
    }

    /**
     * @Route("/admin", name="delete_tech")
     */
    public function deleteTechAction(Request $request){
            $tech_id = $request->get("tech_id");
            $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository(User::class)->findOneBy(array('id' => $tech_id));

        if ($entity != null){
            $em->remove($entity);
            $em->flush();
        }

    }

    /**
     * @Route("/admin/remove", name="admin_remove_technician")
     */
    public function removeTechnicianAction(Request $request) {
        $id = $request->get('techId');

        var_dump($id);
        $em = $this->getDoctrine()->getManager();
        $usersRepository = $em->getRepository(User::class);

        $user = $usersRepository->findOneBy('id' == $id);
        if(\is_null($user)) {
            return $this->redirect($this->generateUrl('admin_area', array('error' => 'User could not be deleted, please contact super admin.')), 301);
        }

        $em->remove($user);
        $em->flush();

        return $this->redirect($this->generateUrl('admin_area', array('error' => 'User is deleted')), 301);
    }

    /**
     * @Route("/admin/edit/{id}", name="admin_edit_technician")
     */
    public function editTechnicianAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $usersRepository = $em->getRepository(User::class);

        $technician = $usersRepository->find($id);
        if(\is_null($technician)) {
            return $this->redirect($this->generateUrl('admin_area', array('error' => 'Technician could not be found, please try again or contact Super Admin.')), 301);
        }

        return $this->render('default/edit.technician.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'technician' => $technician,
        ]);
    }

    /**
     * @Route("/admin/edit/submit", name="admin_submit_technician")
     */
    public function technicianSubmitAction(Request $request, $id) {
        $formData = $request->get('technician_edit_form');
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
