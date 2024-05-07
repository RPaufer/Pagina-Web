<?php
//echo $_POST["ProyectoEstudiante"];
include("bd.php");
if (!empty($_GET["CódigoProyecto"])){
    $Consulta = "select * FROM proyecto WHERE CódigoProyecto =".$_GET["CódigoProyecto"];
    $Resultado=False;
    try {
        $Resultado= mysqli_query($Conexion, $Consulta);
        }
    catch (Exception $e)
        { $Mensaje = "No se pudo consultar el estudiante con codigo del proyecto ".$_GET["CódigoProyecto"];
            //$error=$e->getMessage();
            //print $e->getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "No se pudo consultar el estudiante con codigo del proyecto".$_GET["CódigoProyecto"];
                    //die($mysqli_error($Conexion));
                }
    else {$Mensaje = "Se pudo consultar el estudiante con codigo del proyecto".$_GET["CódigoProyecto"];}
    $Registro=$Resultado->fetch_assoc();
        }


else if (!empty($_POST["CódigoProyecto"]) && !empty($_POST["NombreProyecto"]))
{
    $CódigoProyecto = $_POST["CódigoProyecto"]; 
    $NombreProyecto = $_POST["NombreProyecto"];

   
    $Consulta="UPDATE especialidad SET CódigoProyecto = '".$CódigoProyecto."', NombreProyecto = '".$NombreProyecto."' WHERE proyecto.CódigoProyecto = ".$CódigoProyecto;
   
   // echo $Consulta;

    $Resultado=False;
    try {
        $Resultado= mysqli_query($Conexion, $Consulta);
        }
    catch (Exception $e)
        { $Mensaje = "No se pudo actualizar el proyecto por error en los datos";
            //$error=$e->getMessage();
            //print $e->getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "No se pudo actualizar el proyecto";
                    //die($mysqli_error($Conexion));
        
                }
    else {$Mensaje = "El proyecto se actualizó correctamente";}
    }//Fin del if
    else {
        $Mensaje = "Todos los campos son obligatorios";
    }
    echo "<h3>".$Mensaje."</h3>";

    //$EstudianteActualizando=$ResultadoE->fetch_assoc();
    //echo $EstudianteActualizando["NombreEspecialidad"];
?>