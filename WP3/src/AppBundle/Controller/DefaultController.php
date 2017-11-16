<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route(name="navigation")
     */
    public function navigationAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/navigation.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/userpage", name="userroute")
     */
    public function userAction(Request $request)
    {
        return new Response("userpage<br/>");
    }

    /**
     * @Route("/quit", name="quitroute")
     */
    public function quitAction(Request $request)
    {
        header("HTTP/1.1 401 Access Denied");
        header("WWW-Authenticate: ".
            "Basic realm=\"localhost:8000/\"");
        header("Content-Length: 0");
        return new Response(null,401);
    }

    /**
     * @Route("/noaccess", name="noaccess")
     */
    public function noAccess(Request $request)
    {
        throw $this->
        createAccessDeniedException('No access');

    }
}
