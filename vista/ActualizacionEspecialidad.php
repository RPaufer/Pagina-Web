<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización De La Especialidad</title>
</head>
<body>
    <h1>Actualización De La Especialidad</h1>
    <?php include("../controlador/ActualizarEspecialidad.php"); ?>
    <form action="ActualizacionEspecialidad.php" method="post">
        <label for="CódigoEspecialidad">Código De La Especialidad:</label>
        <input type="number" name="CódigoEspecialidad" id="CódigoEspecialidad" value="<?php echo $Registro["CódigoEspecialidad"]; ?>"><br>
        <label for="NombreEspecialidad">Nombre De La Especialidad</label>
        <input type="text" name="NombreEspecialidad" id="NombreEspecialidad" value="<?php echo $Registro["NombreEspecialidad"]; ?>"><br>
        <button type="submit">Actualizar Estudiante</button>
    </form>

</body>
</html>