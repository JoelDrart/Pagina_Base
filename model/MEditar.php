<?php 
    include('../config/config.php');
    $id = $_REQUEST['edit'];
    $obtener = "SELECT * FROM datos WHERE id = $id";

    $resultado = mysqli_query($conexion, $obtener);
    $fila = mysqli_fetch_array($resultado);
    $nombre = $fila['nombre'];
    $apellido = $fila['apellido'];
    $clave = $fila['clave'];
?>
    <center>
    <h1> Editar usuario</h1>
        <form action="../model/MEditarTar.php" method="post" class="form form-group">
            <label for="">ID:</label>
            <input type="text" name="id" id="id" value="<?php echo $id ?>" readonly>
            <br>
        <label for="">Nombre</label>
        <input type="text" name="nombre" value="<?php echo $nombre ?>" id="nombre" placeholder="Nombre">
        <br>
        <label for="">Apellido</label>
        <input type="text" name="apellido" value="<?php echo $apellido ?>" id="apellido" placeholder="Apellido">
        <br>

        <br>
        <input type="submit" value="Guardar datos" name="ingresar" >
    </form>
    <br>
    <a href="../Index.html">Volver al Inicio</a>
    </center>
<?php
    


?>

