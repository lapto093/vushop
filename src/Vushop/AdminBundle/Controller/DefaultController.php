<?php

namespace Vushop\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $usr= $this->get('security.context')->getToken()->getUser();
        //$name = $usr->getUsername();
        return $this->render('AdminBundle:Default:index.html.twig', array('username' => $usr->getUsername()));
    }    
}
