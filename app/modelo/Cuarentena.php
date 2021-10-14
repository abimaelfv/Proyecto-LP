<?php

namespace app\modelo;
use config\Conexion;

require_once 'config\autocarga.php';

class Cuarentena
{
    private $ID;
    private $cod_persona;
    private $F_inicio;
    private $F_fin;
    private $lugar_Aislamiento;

    public function getID()
    {
        return $this->ID;
    }

    public function setID($ID): void
    {
        $this->ID = $ID;
    }

    public function getCodPersona()
    {
        return $this->cod_persona;
    }

    public function setCodPersona($cod_persona): void
    {
        $this->cod_persona = $cod_persona;
    }

    public function getFInicio()
    {
        return $this->F_inicio;
    }

    public function setFInicio($F_inicio): void
    {
        $this->F_inicio = $F_inicio;
    }

    public function getFFin()
    {
        return $this->F_fin;
    }

    public function setFFin($F_fin): void
    {
        $this->F_fin = $F_fin;
    }

    public function getLugarAislamiento()
    {
        return $this->lugar_Aislamiento;
    }

    public function setLugarAislamiento($lugar_Aislamiento): void
    {
        $this->lugar_Aislamiento = $lugar_Aislamiento;
    }

}