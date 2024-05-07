<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro De Especialidad</title>
</head>
<body>
    <h1>Registro De Especialidad</h1>
    <?php include("../controlador/RegistrarEspecialidad.php"); ?>
    <form action="RegistroEspecialidades.php" method="post">
        <label for="Código">Código Especialidad:</label>
        <input type="number" name="Código" id="Código"><br>
        <label for="NombreEspecialidad">Nombre De La Especialidad:</label>
        <input type="text" name="NombreEspecialidad" id="NombreEspecialidad"><br>
        <button type="submit">Registrar Especialidad</button>
    </form>

</body>
</html>