<?php

namespace Vushop\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Vushop\AdminBundle\Form\FrmCategory;
use Vushop\AdminBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;

class CategoryController extends Controller
{
    public function indexAction()
    {
        $category = $this->getDoctrine()->getRepository('AdminBundle:Category')->findBy(array('status' => 1));
        
        //$name = $usr->getUsername();
        return $this->render('AdminBundle:Category:index.html.twig', array('category' => $category));
    }
    
    public function createAction(Request $request ) {
        $entity = new Category();
        $form = $this->createForm(new FrmCategory($this->getDoctrine()), $entity);
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_category'));
        }
        return $this->render('AdminBundle:Category:create.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
