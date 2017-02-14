<?php

namespace App\Controllers;

use App\Views\GenerateViews;

/**
 * Class CoreController
 * @package App\Controllers
 */
class CoreController
{

    public function callView($datas, $view){
        //instanciates the view
        $view = new GenerateViews($view);
        //send datas in the view
        $view->generateContent($datas);
    }

}