<?php
header('Content-Type: application/json');
require("conexion.php");

class Usuarios
{
    public function QueryUsers()
    {
        $objCone= new conexion();
        $conne=$objCone->conectar();
        $query="select * from usuarios";
        $consulta=pg_query($conne,$query);
        $datos= pg_fetch_all($consulta,PGSQL_ASSOC);
        echo json_encode($datos); 
    }
}

?>