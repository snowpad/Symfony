<?php

namespace Lidl\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LidlMyBundle:Default:index.html.twig', array('name' => $name));
    }
}
