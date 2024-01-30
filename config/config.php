
<?php
    $conexion = mysqli_connect('localhost:3306', 'root', '', 'practica');
    if(!$conexion){
        echo 'Error al conectar a la base de datos';
    }
?>
