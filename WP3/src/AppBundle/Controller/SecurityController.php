<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="loginroute")
     */
    public function loginAction()
    {
        return $this->render('FOSUserBundle:Security:login.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/login_check", name="checkroute")
     */
    public function loginCheckAction()
    {
// NB hier geen code: het framework voorziet de controles/acties
    }

    /**
     * @Route("/register", name="registerroute")
     */
    /* public function registerAction()
     {
         $form = $this->createForm(new ContactType());

         return $this->render('FOSUserBundle:Registration:register.html.twig', array('form' => $form->createView()));
     }*/

    /**
     * @Route("/quit", name="quitroute")
     */
    public function quitAction(Request $request)
    {
        // NB hier geen code: het framework voorziet de acties
    }

    public function getTokenAction()
    {
        return new Response($this->container->get('form.csrf_provider')
            ->generateCsrfToken('authenticate'));
    }

    public function confirmedAction()
    {
        return $this->render('default/index.html.twig'
        );
    }

}
