<?php

namespace App\Controllers;

use App\Dao\Dao;
use App\Models\PersonModel;

/**
 * Class PersonController
 * @package App\Controllers
 */
class PersonController extends CoreController
{

    /**
     * Get the datas from DAO
     * Send them to the model, then the view
     */
    public function getAllPersons(){

        $datas = [];

        try {

            $dao = new Dao('../phonebook.csv', ';');
            $data_dao = $dao->parseFile();

            foreach ($data_dao as $data){

                try {
                    $model = new PersonModel($data);
                    array_push($datas, $model);
                } catch (\Exception $e){
                    $datas[] = "Les données sont corrompues";
                }

            }//endfor

            $this->callView($datas, 'home');

        } catch (\Exception $e) {
            $datas[] = "Le fichier n'existe pas";
        }

    }

}