<?php

namespace Vushop\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;

class FrmCategory extends AbstractType {
    
    private $doctrine;

    public function __construct(RegistryInterface $doctrine)
    {
        $this->doctrine = $doctrine;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $tmp = $this->getCategory();
        echo '<pre>';
        print_r($tmp);
        exit;
        
        $builder->add('category_name', 'text', array('attr' => array('widget' => 'single_text')))
                ->add('parent_id', 'choice', array(
                    'choices' => array(1 => 'Enable', 0 => 'Disable')
                    ))
                ->add('description', 'textarea')
                ->add('status', 'choice', array(
                    'choices' => array(1 => 'Enable', 0 => 'Disable')
                    ));
    }
    
    public function getCategory() {
        return $this->doctrine->getRepository('AdminBundle:Category')->getAllCat(0);
    }
    
    public function getName() {
        
    }
    

}
