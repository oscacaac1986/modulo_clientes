
<?php
header('Content-Type: application/json');

require("usuarios.php");


switch ($_GET['accion']) {
    case 'listar':
        # code...
        $prueba1= new Usuarios();
        $data=$prueba1->QueryUsers();
        return $data;
        break;
    
    default:
        # code...
        break;
}


?>