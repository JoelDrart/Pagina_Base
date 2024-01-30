<?php
    include("../config/config.php");

    // Realizar la consulta a la tabla Usuarios
    $sql = "SELECT * FROM Usuarios";
    $resultado = mysqli_query($conexion, $sql);

    // Recorrer los resultados
    while ($fila = mysqli_fetch_array($resultado)) {
        // Acceder a los datos de cada fila
        $id = $fila['id'];
        $nombre = $fila['nombre'];
        $apellido = $fila['apellido'];
        $contrasena = $fila['contrasena'];

        // Hacer algo con los datos obtenidos
?>
        <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $nombre ?></td>
            <td><?php echo $apellido ?></td>
            <td><?php echo $contrasena ?></td>
        </tr>
<?php
    }

    // Liberar memoria
    mysqli_free_result($resultado);
    mysqli_close($conexion);
    


?>