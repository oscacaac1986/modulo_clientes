<?php 

require('obj_dependencia.php');

switch ($_GET['accion']) {
    case 'listar':
        $dep= new Dependencias();
        $resul=$dep->ListarDependencias();
        echo $resul;
        break;

    case 'insertar':

        if (isset($_GET['nombre'])) {
            $dep= new Dependencias();
            $prueba= $dep->CreateDependencias($_GET['nombre']);
            echo $prueba;
        } else {
            echo "No hay datos";
        }
        
        break;

    case 'queryinv':
        $dep= new Dependencias();
        $resul=$dep->EditarDependencias($_GET['id']);
        echo $resul;
        break;
    
    default:
        # code...
        break;
}




?>