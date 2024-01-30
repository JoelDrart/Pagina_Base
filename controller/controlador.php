<?php
    $v1 = $_GET['var1'];

    // switch ($v1) {
    //     case 1:
    //         include("../view/VIngreso.php");
    //         break;
        
    //     default:
    //         echo "No se ha seleccionado ninguna opción";
    //         break;
    // }

    if($v1 == 1){
        include("../view/VIngreso.php");
    }else if($v1 == 2){
        include("../view/VConsulta.php");
    }
?>