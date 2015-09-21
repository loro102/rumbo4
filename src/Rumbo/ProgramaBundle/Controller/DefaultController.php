<?php

namespace Rumbo\ProgramaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RumboProgramaBundle:Default:index.html.twig', array('name' => $name));
    }
}
