<?php
    include('../config/config.php');
    $id = $_REQUEST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $sql = "UPDATE datos SET nombre = '$nombre', apellido = '$apellido' WHERE id = '$id'";

    $ejecutar = mysqli_query($conexion, $sql);

    if(!$ejecutar){
        echo 'Error al editar los datos';
        echo '<br><a href="../Controller/Ccontroller.php?var1=4">Volver</a>';
    }else{
        echo 'Datos Editados correctamente';
        echo '<br><a href="../Controller/Ccontroller.php?var1=4">Volver</a>';

    }
?>