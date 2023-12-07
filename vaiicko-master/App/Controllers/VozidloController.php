<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Vozidlo;

class VozidloController extends AControllerBase
{
    //vozidlo
    public function index(): Response
    {
        return $this->html();
    }

    public function vytvor() : Response
    {

        $data = $this->request()->getPost();
        $id = $data['id'];
        $vin = $data['vin'];


        $vozidloJe = Vozidlo::getAll("id = ?", [$id]);
        if ($vozidloJe) {
            return $this->redirect("?c=vozidlo&a=error&message=Vozidlo už existuje");
        }

        if( (isset($data["id"]) == false) && (isset($data["vin"]) == false)) {
            return $this->redirect("?c=vozidlo&a=error");

        } else {
            $vozidlo = new Vozidlo();
            $vozidlo->setId($id);
            $vozidlo->setVin($vin);

            $vozidlo->save();
        }

        return $this->redirect("?c=home&a=eshop");

    }

    public function error(): Response
    {
        return  $this->html();
    }

}