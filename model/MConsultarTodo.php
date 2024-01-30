<?php
    include('../config/config.php');
    $sql = "SELECT * FROM datos";
    $resultado = mysqli_query($conexion, $sql);
    while($fila = mysqli_fetch_array($resultado))
    {
?>
        <tr>
            <td> <?php echo $fila['id']?></td>
            <td> <?php echo $fila['nombre']?></td>
            <td> <?php echo $fila['apellido']?></td>
        </tr>
<?php
    }
?>