<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Produkt;

class ProductController extends AControllerBase
{
    public function index(): Response
    {
        $produkt = Produkt::getAll();
        return $this->html($produkt);
    }

    public function pridaj() : Response
    {

        $data = $this->request()->getPost();
        $obrazok = $data['obrazok'];
        $nazov = $data['nazov'];
        $cena = $data['cena'];


        $produktJe = Produkt::getAll("nazov = ?", [$nazov]);
        if ($produktJe) {
            return $this->redirect("?c=product&a=error&message=Login už existuje");
        }

        if( (isset($data["nazov"]) == false) && (isset($data["cena"]) == false)) {
            return $this->redirect("?c=product&a=error");

        } else {
            $produkt = new Produkt();
            $produkt->setNazov($nazov);
            $produkt->setCena($cena);
            $produkt->setObrazok($obrazok);

            $produkt->save();
        }

        return $this->redirect("?c=home&a=eshop");

    }


    public function zmazat() {
        $data = $this->request()->getValue('id');
        $id = $data['id'];

        $produktJe = Produkt::getOne($id);
        if ($produktJe) {
            $produktJe->delete();
        }
            $this->redirect("?c=product&a=error&message=Nexistuje");
    }

    public function uprav() {
        $data = $this->request()->getValue('nazov');
        $nazov = $data['nazov'];
        $data = $this->request()->getValue('cena');
        $cena = $data['cena'];


        $produkt = Produkt::getOne('id');
        $produkt->setNazov($nazov);
        $produkt->setCena($cena);
        return $this->html($produkt, 'home.eshop');

    }

    public function error(): Response
    {
        return  $this->html();
    }
}