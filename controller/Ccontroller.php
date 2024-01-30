<?php

    $v1 = $_GET['var1'];

    if($v1 == 1){
        include('../View/Vingreso.php');
    }
    elseif($v1 == 2){
        include('../View/VConsulta.php');
    }
    else if($v1 == 3){

        include('../View/VBuscar.php');

    }else if($v1 == 4){
        include('../View/VEliminar.php');
    }else{
        "ninguna opcion seleccionada";
    }
?>