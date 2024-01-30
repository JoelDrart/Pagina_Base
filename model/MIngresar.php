<?php
    include('../config/config.php');
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $clave = sha1($_POST['clave']);
    $sql = "INSERT INTO datos(nombre, apellido, clave) VALUES ('$nombre', '$apellido', '$clave')";

    $ejecutar = mysqli_query($conexion, $sql);

    if(!$ejecutar){
        echo 'Error al guardar los datos';
    }else{
        echo 'Datos guardados correctamente';
    }
?>