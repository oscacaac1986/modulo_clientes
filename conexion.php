<?php

/* Clase que conecta una base de datos  postgresql */

class conexion{

    private $host="localhost";
    private $user="postgres";
    private $password="Sistemas2020**";
    private $database="solti3";
    private $port="5432";




    public function conectar()
    {
        # code...
        //$conn=mysqli_connect($this->host,$this->user,$this->password,$this->database,$this->port)or die("error de conexion".mysqli_error($conn));
        $conn= pg_connect("host=".$this->host." port=".$this->port." dbname=".$this->database." user=".$this->user." password=".$this->password);
        return $conn;
    }

}
1
?>