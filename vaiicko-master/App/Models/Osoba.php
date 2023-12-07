<?php

namespace App\Models;

use App\Core\Model;

class Osoba extends Model
{
    protected $id;
    protected $login;
    protected $password;
    protected $meno;
    protected $priezvisko ;
    protected $tel_cislo ;
    protected $ulica;
    protected $cislo ;
    protected $mesto ;
    protected $psc;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMeno()
    {
        return $this->meno;
    }

    /**
     * @param mixed $meno
     */
    public function setMeno($meno): void
    {
        $this->meno = $meno;
    }

    /**
     * @return mixed
     */
    public function getPriezvisko()
    {
        return $this->priezvisko;
    }

    /**
     * @param mixed $priezvisko
     */
    public function setPriezvisko($priezvisko): void
    {
        $this->priezvisko = $priezvisko;
    }


    /**
     * @return mixed
     */
    public function getTelCislo()
    {
        return $this->tel_cislo;
    }

    /**
     * @param mixed $tel_cislo
     */
    public function setTelCislo($tel_cislo): void
    {
        $this->tel_cislo = $tel_cislo;
    }

    /**
     * @return mixed
     */
    public function getUlica()
    {
        return $this->ulica;
    }

    /**
     * @param mixed $ulica
     */
    public function setUlica($ulica): void
    {
        $this->ulica = $ulica;
    }

    /**
     * @return mixed
     */
    public function getCislo()
    {
        return $this->cislo;
    }

    /**
     * @param mixed $cislo
     */
    public function setCislo($cislo): void
    {
        $this->cislo = $cislo;
    }

    /**
     * @return mixed
     */
    public function getMesto()
    {
        return $this->mesto;
    }

    /**
     * @param mixed $mesto
     */
    public function setMesto($mesto): void
    {
        $this->mesto = $mesto;
    }

    /**
     * @return mixed
     */
    public function getPsc()
    {
        return $this->psc;
    }

    /**
     * @param mixed $psc
     */
    public function setPsc($psc): void
    {
        $this->psc = $psc;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login): void
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }



}