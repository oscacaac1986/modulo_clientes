<?php

/* Clase que conecta una base de datos  postgresql */
$host="localhost";
$user="postgres";
$password="Sandra1986**";
$database="Solti";
$port="5432";


class conexion{

    
    private $host="localhost";
    private $user="postgres";
    private $password="Sandra1986**";
    private $database="Solti";
    private $port="5432";

    public function conectar()
    {
        # code...
        //$conn=mysqli_connect($this->host,$this->user,$this->password,$this->database,$this->port)or die("error de conexion".mysqli_error($conn));
        $conn= pg_connect("host=".$this->host." port=".$this->port." dbname=".$this->database." user=".$this->user." password=".$this->password) or die ("Error en la conexion".pg_errormessage($conn));
        return $conn;
        
    }

    

}


?>