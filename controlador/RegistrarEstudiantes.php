<?php
if (!empty($_POST["CódigoEstudiante"]) && !empty($_POST["PrimerNombreEstudiante"]) && !empty($_POST["PrimerApellidoEstudiante"]) && !empty($_POST["CursoEstudiante"]) && !empty($_POST["EspecialidadEstudiante"]) && !empty($_POST["ProyectoEstudiante"]))
{
    $CódigoEstudiante = $_POST["CódigoEstudiante"]; 
    $PrimerNombre = $_POST["PrimerNombreEstudiante"];
    $SegundoNombre = $_POST["SegundoNombreEstudiante"];
    $PrimerApellido = $_POST["PrimerApellidoEstudiante"];
    $SegundoApellido = $_POST["SegundoApellidoEstudiante"];
    $Curso = $_POST["CursoEstudiante"];
    $EspecialidadEstudiante = $_POST["EspecialidadEstudiante"];
    $CódigoProyecto = $_POST["ProyectoEstudiante"];
    $FechaNacimiento = $_POST["FechaNacimientoEstudiante"];

    include("bd.php");
    $Consulta="INSERT INTO estudiante (CódigoEstudiante, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Curso, CódigoEspecialidad, CódigoProyecto, FechaNacimiento) VALUES ('".$CódigoEstudiante."','".$PrimerNombre."', '".$SegundoNombre."', '".$PrimerApellido."', '".$SegundoApellido."', '".$Curso."', '".$EspecialidadEstudiante."', '".$CódigoProyecto."', '".$FechaNacimiento."')";
   
   // echo $Consulta;

    $Resultado=False;
    try {
        $Resultado= mysqli_query($Conexion, $Consulta);
        }
    catch (Exception $e)
        { $Mensaje = "No se pudo registrar al Estudiante por error en los datos";
            //$error=$e->getMessage();
            //print $e->getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "No se pudo registrar al Estudiante";
                    //die($mysqli_error($Conexion));
        
                }
    else {$Mensaje = "El Estudiante se registró correctamente";}
    }//Fin del if
    else {
        $Mensaje = "El Código, el Primer Nombre, el Primer Apellido, el Curso, la Especialidad y el Proyecto son campos obligatorios";
    }
    echo "<h3>".$Mensaje."</h3>";
?>