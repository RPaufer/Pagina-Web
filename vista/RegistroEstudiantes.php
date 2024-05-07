<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro De Estudiante</title>
</head>
<body>
    <h1>Registro De Estudiantes</h1>
    <?php include("../controlador/RegistrarEstudiantes.php"); ?>
    <form action="RegistroEstudiantes.php" method="post">
        <label for="CódigoEstudiante">Código Estudiante:</label>
        <input type="number" name="CódigoEstudiante" id="CódigoEstudiante"><br>
        <label for="PrimerNombreEstudiante">Primer Nombre de Estudiante:</label>
        <input type="text" name="PrimerNombreEstudiante" id="PrimerNombreEstudiante"><br>
        <label for="SegundoNombreEstudiante">Segundo Nombre de Estudiante:</label>
        <input type="text" name="SegundoNombreEstudiante" id="SegundoNombreEstudiante"><br>
        <label for="PrimerApellidoEstudiante">PrimerApellido de Estudiante:</label>
        <input type="text" name="PrimerApellidoEstudiante" id="PrimerApellidoEstudiante"><br>
        <label for="SegundoApellidoEstudiante">Segundo Apellido de Estudiante:</label>
        <input type="text" name="SegundoApellidoEstudiante" id="SegundoApellidoEstudiante"><br>
        <label for="CursoEstudiante">Curso del Estudiante:</label>
        <input type="number" name="CursoEstudiante" id="CursoEstudiante"><br>
        <label for="EspecialidadEstudiante">Especialidad del Estudiante</label>
            <?php include("../controlador/ComboEspecialidades.php"); ?>
        <br>   
            <label for="ProyectoEstudiante">Proyecto del Estudiante:</label>
            <select name="ProyectoEstudiante" id="ProyectoEstudiante">
                <option value="1">Aplicación Web - MercaDeSales</option>
                <option value="2">Aplicación Web - Tienda Virtual</option>
                <option value="3">OVA - Aprendiendo Inglés</option>
            </select><br>

        <label for="FechaNacimientoEstudiante">Fecha De Nacimiento del Estudiante:</label>
        <input type="date" name="FechaNacimientoEstudiante" id="FechaNacimientoEstudiante"><br>
        <button type="submit">Registrar Estudiante</button>
        
    </form>

</body>
</html>