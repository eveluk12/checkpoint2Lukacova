<?php

namespace App\Controllers;

use App\Config\Configuration;
use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Osoba;

class RegistrationController extends AControllerBase
{
    public function index(): Response
{
    return $this->html();
}

    public function reg(): Response
    {
        return  $this->html();
    }

    public function error(): Response
    {
        return  $this->html();
    }

    public function registracia() : Response
    {

        $data = $this->request()->getPost();
        $meno = $data['meno'];
        $priezvisko = $data['priezvisko'];
        $login = $data['login'];


        $osobaJe = Osoba::getAll("login = ?", [$login]);
        if ($osobaJe) {
            return $this->redirect("?c=registration&a=error&message=Login už existuje");
        }

        if( (isset($data["password"]) == false) && (isset($data["login"]) == false)) {
            return $this->redirect("?c=registration&a=error");

        } else {
            $osoba = new Osoba();
            $osoba->setMeno($meno);
            $osoba->setPriezvisko($priezvisko);
            $osoba->setLogin($login);
            $password = password_hash($data["password"], PASSWORD_BCRYPT);
            $osoba->setPassword($password);

            $osoba->save();
        }

        return $this->redirect("?c=auth&a=login");

    }


    public function authorize(string $action)
    {
        return true; //
    }
}