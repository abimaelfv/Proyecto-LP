<?php

namespace app\modelo;
use config\Conexion;

require_once 'config\autocarga.php';

class AgentePNP
{
    private $DNI;
    private $nombres;
    private $apellidos;
    private $clave;
    private $rol;

    public function getDNI()
    {
        return $this->DNI;
    }

    public function setDNI($DNI): void
    {
        $this->DNI = $DNI;
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

    public function getClave()
    {
        return $this->clave;
    }

    public function setClave($clave): void
    {
        $this->clave = $clave;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setRol($rol): void
    {
        $this->rol = $rol;
    }


}