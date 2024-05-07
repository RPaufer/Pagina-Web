<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión De Especialidades</title>
</head>
<body>
    <h3>LISTADO DE ESTUDIANTES</h3>
    <a href="RegistroEstudiantes.php">Registrar Estudiantes</a>
    <br>
    <?php
    include("../controlador/EliminarEstudiante.php");
    include("../controlador/ListarEstudiantes.php");
    ?>
</body>
</html>