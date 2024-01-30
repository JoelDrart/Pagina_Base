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
            <td> <a href="../model/MEliminar.php?elim=<?php echo $fila['id']?>"><img src="../img/eliminar.png" alt="" srcset="" style="height: 1.5em;"> </a> </td>
            <td> <a href="../model/MEditar.php?edit=<?php echo $fila['id']?>""><img src="../img/editar.png" alt="" srcset="" style="height: 1.5em;"> </a> </td>
        </tr>
<?php
    }
?>