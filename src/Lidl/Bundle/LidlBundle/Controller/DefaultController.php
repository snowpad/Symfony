<?php

namespace Lidl\Bundle\LidlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LidlLidlBundle:Default:index.html.twig', array('name' => $name));
    }
}
