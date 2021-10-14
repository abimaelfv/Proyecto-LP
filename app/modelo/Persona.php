<?php

namespace app\modelo;
use config\Conexion;

require_once 'config\autocarga.php';

class Persona
{
    private $cod;
    private $DNI;
    private $F_registro;
    private $nombres;
    private $apellidos;
    private $edad;
    private $via_acceso;
    private $prueva_covid;
    private $motivo_ingreso;

    public function getCod()
    {
        return $this->cod;
    }

    public function setCod($cod): void
    {
        $this->cod = $cod;
    }

    public function getDNI()
    {
        return $this->DNI;
    }

    public function setDNI($DNI): void
    {
        $this->DNI = $DNI;
    }

    public function getFRegistro()
    {
        return $this->F_registro;
    }

    public function setFRegistro($F_registro): void
    {
        $this->F_registro = $F_registro;
    }

    public function getNombres()
    {
        return $this->nombres;
    }

    public function setNombres($nombres): void
    {
        $this->nombres = $nombres;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos): void
    {
        $this->apellidos = $apellidos;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad): void
    {
        $this->edad = $edad;
    }

    public function getViaAcceso()
    {
        return $this->via_acceso;
    }

    public function setViaAcceso($via_acceso): void
    {
        $this->via_acceso = $via_acceso;
    }

    public function getPruevaCovid()
    {
        return $this->prueva_covid;
    }

    public function setPruevaCovid($prueva_covid): void
    {
        $this->prueva_covid = $prueva_covid;
    }

    public function getMotivoIngreso()
    {
        return $this->motivo_ingreso;
    }

    public function setMotivoIngreso($motivo_ingreso): void
    {
        $this->motivo_ingreso = $motivo_ingreso;
    }

}