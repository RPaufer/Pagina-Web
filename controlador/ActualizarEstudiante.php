<?php
//echo $_POST["ProyectoEstudiante"];
include("bd.php");
if (!empty($_GET["CódigoEstudiante"])){
    $Consulta = "select * from estudiante where CódigoEstudiante =".$_GET["CódigoEstudiante"];
    $Resultado=False;
    try {
        $Resultado= mysqli_query($Conexion, $Consulta);
        }
    catch (Exception $e)
        { $Mensaje = "No se pudo consultar el estudiante con codigo ".$_GET["CódigoEstudiante"];
            //$error=$e->getMessage();
            //print $e->getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "No se pudo consultar el estudiante con codigo ".$_GET["CódigoEstudiante"];
                    //die($mysqli_error($Conexion));
                }
    else {$Mensaje = "Se pudo consultar el estudiante con codigo".$_GET["CódigoEstudiante"];}
    $Registro=$Resultado->fetch_assoc();
        }


else if (!empty($_POST["CódigoEstudiante"]) && !empty($_POST["PrimerNombreEstudiante"]) && !empty($_POST["PrimerApellidoEstudiante"]) && !empty($_POST["CursoEstudiante"]) && !empty($_POST["EspecialidadEstudiante"]) && !empty($_POST["ProyectoEstudiante"]))
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

   
    $Consulta="UPDATE estudiante SET CódigoEstudiante = '".$CódigoEstudiante."', PrimerNombre = '".$PrimerNombre."', SegundoNombre = '".$SegundoNombre."', PrimerApellido = '".$PrimerApellido."', SegundoApellido = '".$SegundoApellido."', Curso = '".$Curso."', CódigoEspecialidad = '".$EspecialidadEstudiante."', CódigoProyecto = '".$CódigoProyecto."', FechaNacimiento = '".$FechaNacimiento."' WHERE estudiante.CódigoEstudiante = ".$CódigoEstudiante;
   
   // echo $Consulta;

    $Resultado=False;
    try {
        $Resultado= mysqli_query($Conexion, $Consulta);
        }
    catch (Exception $e)
        { $Mensaje = "No se pudo actualizar al Estudiante por error en los datos";
            //$error=$e->getMessage();
            //print $e->getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "No se pudo actualizar al Estudiante";
                    //die($mysqli_error($Conexion));
        
                }
    else {$Mensaje = "El Estudiante se actualizó correctamente";
        header('Location: Estudiantes.php');
            }
    }//Fin del if
    else {
        $Mensaje = "El Código, el Primer Nombre, el Primer Apellido, el Curso, la Especialidad y el Proyecto son campos obligatorios";
    }
    echo "<h3>".$Mensaje."</h3>";

    //$EstudianteActualizando=$ResultadoE->fetch_assoc();
    //echo $EstudianteActualizando["NombreEspecialidad"];
?>