<?php
    include('../config/config.php');
    $id = $_REQUEST['elim'];
    $sql = "DELETE FROM datos WHERE id = $id";
    $resultado = mysqli_query($conexion, $sql);
    if($resultado){
        echo "Eliminado Correctamente";
        echo '<br><a href="../Index.html">Volver al Inicio</a>';
    }else{
        echo "No se pudo eliminar";
        echo '<br><a href="../Index.html">Volver al Inicio</a>';
    }

?>