<?php 

namespace Acme\Controllers;

use duncan3dc\Laravel\Blade;
use duncan3dc\Laravel\BladeInstance;
use Acme\Validation\Validator;


class BaseController
{
    
//    //TWIG setup
//    protected $loader;
//    protected $twig;
//    
//    //need constructor for Twig
//    public function __construct()
//    {
//        $this->loader = new \Twig_Loader_Filesystem(__DIR__ . "/../../views");
//        $this->twig = new \Twig_Environment($this->loader, [
//            'cache' => false, 'debug' => true
//        ]);
//    }
    
    protected $blade;
    
    public function __construct()
    {
        $this->blade = new BladeInstance("/vagrant/views", "/vagrant/cache/views");
    }
    
}
