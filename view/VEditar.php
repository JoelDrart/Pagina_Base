<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    <center>
    <h1> Editar usuario</h1>
        <form action="../model/MEditarTar.php?id=" method="post" class="form form-group">
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <br>
        <label for="">Apellido</label>
        <input type="text" name="apellido" id="apellido" placeholder="Apellido">
        
        <br>
        <br>
        <input type="submit" value="Guardar datos" name="ingresar" >
    </form>
    <br>
    <a href="../Index.html">Volver al Inicio</a>
    </center>
    
    
    
</body>
</html>