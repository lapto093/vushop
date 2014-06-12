<?php

namespace Vushop\AdminBundle\Twig\Extensions;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use \Twig_Extension;

class CommonExtension extends Twig_Extension {

    protected $container;
    private $_generator;

    public function __construct(ContainerInterface $container, UrlGeneratorInterface $generator) {
        $this->container = $container;
        $this->_generator = $generator;
    }

    public function getFunctions() {
        return array(
            //'routerParams' => new \Twig_Function_Method($this, 'routerParams'),
            
        );
    }

    public function getFilters() {
        return array(
           // 'htmlConvertSpaceToNbsp' => new \Twig_Filter_Method($this, 'htmlConvertSpaceToNbsp'),
            
        );
    }

    public function convertDate($string) {
        
      //return preg_replace ("/(\>)(\s*)(\\r\\n)*(\s*)(\<)/", '\\1&nbsp;\\5', $string);
      return str_replace('> ', '>&nbsp;', $string);
    }

    public function getName() {
        return 'common_twig_extension';
    }

}
