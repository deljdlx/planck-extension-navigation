<?php


namespace Planck\Extension\Navigation\Module\Container\Router;


use Phi\HTML\CSSFile;
use Phi\HTML\JavascriptFile;
use Planck\Extension\Navigation\Module\Container\View\ContainerEditor;
use Planck\Extension\RichTag\Module\Type\View\Index;
use Planck\Routing\Router;




class Main extends Router
{




    public function registerRoutes()
    {


        $this->get('list', '`/container/list`', function() {


            $view = new ContainerEditor(
                (int) $this->get('container')
            );

            echo $view->render();




        })->html()
        ->setBuilder('/images')
        ;







        return parent::registerRoutes();
    }

}