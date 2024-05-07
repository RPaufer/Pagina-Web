<?php

include("bd.php");

$Consulta="select * from estudiante";

$Resultado=False;
    try {
        $Resultado= mysqli_query($Conexion,$Consulta);
        }
    catch (Exception $e)
        { $Mensaje = "No se pudo consultar a el estudiante";
            //$error=$e->getMessage();
            //print $e->getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "No se pudo consultar a el estudiante";
                    //die($mysqli_error($Conexion));
                }
    else {
        echo '<table border="1">
        <tr>
            <td>Código Del Estudiante</td>
            <td>Primer Nombre de Estudiante</td>
            <td>Segundo Nombre de Estudiante</td>
            <td>PrimerApellido de Estudiante</td>
            <td>Segundo Apellido de Estudiante</td>
            <td>Curso del Estudiante</td>
            <td>Especialidad del Estudiante</td>
            <td>Proyecto del Estudiante</td>
            <td>Fecha De Nacimiento del Estudiante</td>
            <td colspan="2">Acciones</td>
            </tr>';
            while($Registro=$Resultado->fetch_assoc()){
                echo'
                <tr>
                    <td>'.$Registro["CódigoEstudiante"].'</td>
                    <td>'.$Registro["PrimerNombre"].'</td>
                    <td>'.$Registro["SegundoNombre"].'</td>
                    <td>'.$Registro["PrimerApellido"].'</td>
                    <td>'.$Registro["SegundoApellido"].'</td>
                    <td>'.$Registro["Curso"].'</td><td>';
                    include("NombreEspecialidad.php");
                    echo'</td>
                    <td>';
                    include("NombreProyecto.php");
                    echo'</td>
                    <td>'.$Registro["FechaNacimiento"].'</td>
                    <td><a href="ActualizacionEstudiantes.php?CódigoEstudiante='.$Registro["CódigoEstudiante"].'" >Editar<a/></td>
                    <td><a href="#" onclick="Preguntar('.$Registro["CódigoEstudiante"].')"> Eliminar</a></td>
                </tr>';
            } //Fin del ciclo del listado de estudiantes
        echo '</table>';
        }
?>

<script type="text/javascript">
    function Preguntar(CódigoEstudiante)
    {
        if(confirm("¿Esta seguro de eliminar el estudiante con codigo "+CódigoEstudiante+"?"))
        {
            window.location.href = "Estudiantes.php?CódigoEstudiante="+CódigoEstudiante;
        }
    }

</script>