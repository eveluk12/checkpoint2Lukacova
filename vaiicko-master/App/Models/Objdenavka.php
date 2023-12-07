<?php

namespace App\Models;

use App\Core\Model;

class Objdenavka extends Model
{
    protected $id;
    protected $email ;
    protected $id_platba ;
    protected $id_doprava;
    protected $sumaSpolu ;
    protected $stav ;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id_objednavka
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getIdPlatba()
    {
        return $this->id_platba;
    }

    /**
     * @param mixed $id_platba
     */
    public function setIdPlatba($id_platba): void
    {
        $this->id_platba = $id_platba;
    }

    /**
     * @return mixed
     */
    public function getIdDoprava()
    {
        return $this->id_doprava;
    }

    /**
     * @param mixed $id_doprava
     */
    public function setIdDoprava($id_doprava): void
    {
        $this->id_doprava = $id_doprava;
    }

    /**
     * @return mixed
     */
    public function getSumaSpolu()
    {
        return $this->sumaSpolu;
    }

    /**
     * @param mixed $sumaSpolu
     */
    public function setSumaSpolu($sumaSpolu): void
    {
        $this->sumaSpolu = $sumaSpolu;
    }

    /**
     * @return mixed
     */
    public function getStav()
    {
        return $this->stav;
    }

    /**
     * @param mixed $stav
     */
    public function setStav($stav): void
    {
        $this->stav = $stav;
    }


}