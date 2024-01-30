<?php 
include('../config/config.php');
 $id = $_POST['idBuscar'];
 $sql = "SELECT * FROM datos WHERE id = $id";
 $resultado = mysqli_query($conexion, $sql);
 include('../View/VTabla.php');
 while($mostrar = mysqli_fetch_array($resultado))
 {
?>
    <tr>
        <td> <?php echo $mostrar['id']?></td>
        <td> <?php echo $mostrar['nombre']?></td>
        <td> <?php echo $mostrar['apellido']?></td>
        <td> <?php echo $mostrar['clave']?></td>
    </tr>
    </table>
<?php
 }
?>