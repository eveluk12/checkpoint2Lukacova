<?php

namespace App\Models;

use App\Core\Model;

class Vozidlo extends Model
{
protected $id ;
protected $vin;
protected $znacka ;
protected $model_vozidla ;
protected $pohon ;
protected $typ ;
protected $email ;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $spz
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getVin()
    {
        return $this->vin;
    }

    /**
     * @param mixed $vin
     */
    public function setVin($vin): void
    {
        $this->vin = $vin;
    }

    /**
     * @return mixed
     */
    public function getZnacka()
    {
        return $this->znacka;
    }

    /**
     * @param mixed $znacka
     */
    public function setZnacka($znacka): void
    {
        $this->znacka = $znacka;
    }

    /**
     * @return mixed
     */
    public function getModelVozidla()
    {
        return $this->model_vozidla;
    }

    /**
     * @param mixed $model_vozidla
     */
    public function setModelVozidla($model_vozidla): void
    {
        $this->model_vozidla = $model_vozidla;
    }

    /**
     * @return mixed
     */
    public function getPohon()
    {
        return $this->pohon;
    }

    /**
     * @param mixed $pohon
     */
    public function setPohon($pohon): void
    {
        $this->pohon = $pohon;
    }

    /**
     * @return mixed
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * @param mixed $typ
     */
    public function setTyp($typ): void
    {
        $this->typ = $typ;
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


}