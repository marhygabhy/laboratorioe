<?php

namespace ELE\EditorialBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('EditorialBundle:Default:index.html.twig');
    }

    /**
    * @Route("/resena", name="resena")
    */
    public function resenaAction() 
    {
        return $this->render('resena.html.twig');
    }

    /**
    * @Route("/novedades", name="novedades")
    */
    public function novedadesAction() 
    {
        return $this->render('EditorialBundle:Default:novedades.html.twig');
    }

    /**
    * @Route("/login", name="login")
    */
    public function loginAction() 
    {
        return $this->render('EditorialBundle:Default:login.html.twig');
    }
}
