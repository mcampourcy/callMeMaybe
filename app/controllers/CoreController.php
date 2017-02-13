<?php

namespace App\Controllers;

use App\Views\GenerateViews;

/**
 * Class CoreController
 * @package App\Controllers
 */
class CoreController
{

    public function callView($datas, $template){
        //instanciates the view
        $view = new GenerateViews($template);
        //send datas in the view
        $view->generate($datas);
    }

}