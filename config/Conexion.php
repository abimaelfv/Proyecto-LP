<?php
namespace config;

class Conexion{
    private $host = 'localhost';
    private $database = 'region';
    private $username = 'root';
    private $password = '';
    private $opciones = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES\'UTF8\'',\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION);
    
    public $conectar;

    public function __construct(){
        $dsn = "mysql:host=".$this->host.";dbname=".$this->database;
        $this->conectar = new \PDO($dsn, $this->username, $this->password, $this->opciones);
    }

    public function desconectar(){
        $this->conectar = null;
    }
}



