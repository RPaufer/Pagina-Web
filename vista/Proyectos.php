<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión De Proyectos</title>
</head>
<body>
    <h3>LISTADO DE PROYECTOS</h3>
    <a href="RegistroProyectos.php">Registrar Proyecto</a>
    <br>
    <?php
    include("../controlador/EliminarProyecto.php");
    include("../controlador/ListarProyecto.php");
    ?>
    
</body>
</html>