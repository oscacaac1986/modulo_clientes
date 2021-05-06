<?php 

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
require('../../conexion.php');

class Dependencias{


    public function ListarDependencias()

    {
        $obj_conne=new conexion();
        $conn= $obj_conne->conectar();
        $query="select * from dependencias";
        $resul=pg_query($conn,$query);
        /* $dprocesa = pg_fetch_all($resul); */
        $dprocesa = pg_fetch_all($resul, PGSQL_ASSOC);
        $datos=json_encode($dprocesa,JSON_UNESCAPED_UNICODE);
        return  $datos;

    }

    
    public function CreateDependencias($a)
    {
        $nombre=$a;
        $obj_conne= new conexion();
        $conn= $obj_conne->conectar();
        $query="INSERT INTO dependencias(dependencia, idanulo)
            VALUES ( '$nombre', 1)";
        $resul=pg_query($conn,$query);
        
        if ($resul) {
            return 1;
        } else {
            return 0;
        }
        
    }

    public function EditarDependencias($a)
    {
        
        $obj_conne=new conexion();
        $conn= $obj_conne->conectar();
        $query="select * from dependencias where iddependencia=".$a;
        $resul=pg_query($conn,$query);
        /* $dprocesa = pg_fetch_all($resul); */
        $dprocesa = pg_fetch_all($resul, PGSQL_ASSOC);
        $datos=json_encode($dprocesa,JSON_UNESCAPED_UNICODE);
        return  $datos;
    }

    
}





?>