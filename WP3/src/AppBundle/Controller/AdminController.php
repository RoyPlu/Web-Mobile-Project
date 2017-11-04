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
            ->from(\AppBundle\Entity\User::class, 'user')
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
}
