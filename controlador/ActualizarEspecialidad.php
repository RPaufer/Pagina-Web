<?php
//echo $_POST["ProyectoEstudiante"];
include("bd.php");
if (!empty($_GET["CódigoEspecialidad"])){
    $Consulta = "select * FROM especialidad WHERE CódigoEspecialidad =".$_GET["CódigoEspecialidad"];
    $Resultado=False;
    try {
        $Resultado= mysqli_query($Conexion, $Consulta);
        }
    catch (Exception $e)
        { $Mensaje = "No se pudo consultar el estudiante con codigo de la especialidad ".$_GET["CódigoEspecialidad"];
            //$error=$e->getMessage();
            //print $e->getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "No se pudo consultar el estudiante con codigo de la especialidad".$_GET["CódigoEspecialidad"];
                    //die($mysqli_error($Conexion));
                }
    else {$Mensaje = "Se pudo consultar el estudiante con codigo de la especialidad".$_GET["CódigoEspecialidad"];}
    $Registro=$Resultado->fetch_assoc();
        }


else if (!empty($_POST["CódigoEspecialidad"]) && !empty($_POST["NombreEspecialidad"]))
{
    $CódigoEstudiante = $_POST["CódigoEspecialidad"]; 
    $PrimerNombre = $_POST["NombreEspecialidad"];

   
    $Consulta="UPDATE especialidad SET CódigoEspecialidad = '".$CódigoEspecialidad."', NombreEspecialidad = '".$NombreEspecialidad."' WHERE especialidad.CódigoEspecialidad = ".$CódigoEspecialidad;
   
   // echo $Consulta;

    $Resultado=False;
    try {
        $Resultado= mysqli_query($Conexion, $Consulta);
        }
    catch (Exception $e)
        { $Mensaje = "No se pudo actualizar la especialidad por error en los datos";
            //$error=$e->getMessage();
            //print $e->getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "No se pudo actualizar la especialidad";
                    //die($mysqli_error($Conexion));
        
                }
    else {$Mensaje = "La especialidad se actualizó correctamente";}
    }//Fin del if
    else {
        $Mensaje = "Todos los campos son obligatorios";
    }
    echo "<h3>".$Mensaje."</h3>";

    //$EstudianteActualizando=$ResultadoE->fetch_assoc();
    //echo $EstudianteActualizando["NombreEspecialidad"];
?>