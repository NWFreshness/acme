<?php 

namespace Acme\Controllers;

use duncan3dc\Laravel\BladeInstance;

class PageController extends BaseController
{
    
    public function getShowHomePage()
    {
        //include(__DIR__ . "/../../views/home.php");
        //echo $this->twig->render('home.html');
        $_SESSION['test'] = "<strong>I hope this works</strong>";
        echo $this->blade->render("home", ['test'=>'hello again']);
    }
    public function getShowPage(){
        echo "foo";
    }
    
}
