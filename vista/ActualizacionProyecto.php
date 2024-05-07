<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización Del Proyecto</title>
</head>
<body>
    <h1>Actualización Del Proyecto</h1>
    <?php include("../controlador/ActualizarProyecto.php"); ?>
    <form action="ActualizacionProyecto.php" method="post">
        <label for="CódigoProyecto">Código Del Proyecto:</label>
        <input type="number" name="CódigoProyecto" id="CódigoProyecto" value="<?php echo $Registro["CódigoProyecto"]; ?>"><br>
        <label for="NombreProyecto">Nombre Del Proyecto:</label>
        <textarea name="Resumen" id="Resumen" rows="5" cols="20"></textarea><br>
        <label for="FechaRegistro">Fecha De Nacimiento del Estudiante:</label>
        <input type="date" name="FechaRegistro" id="FechaRegistro" value="<?php echo $Registro["FechaRegistro"]; ?>"><br>
        <button type="submit">Actualizar Proyecto</button>

</body>
</html>