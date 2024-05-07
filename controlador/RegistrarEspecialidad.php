<?php
if (!empty($_POST["Código"]) && !empty($_POST["NombreEspecialidad"])) {
    $CódigoEspecialidad = $_POST["Código"]; 
    $NombreEspecialidad = $_POST["NombreEspecialidad"];

    include("bd.php");
    $Consulta="INSERT INTO especialidad (CódigoEspecialidad, NombreEspecialidad) VALUES ('".$CódigoEspecialidad."', '".$NombreEspecialidad."')";
    $Resultado=False;

    try {
        $Resultado = mysqli_query($Conexion, $Consulta);
        }
    catch (Exception $e)
        { $Mensaje = "No se pudo registrar la especialidad por error en los datos";
            //$error=$e->getMessage();
            //print $e->getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "No se pudo registrar la Especialidad";
                    //die($mysqli_error($Conexion));
                }
    else {$Mensaje = "La Especialidad se registró correctamente";}
    }//Fin del if
    else {
        $Mensaje = "El Código y el Nombre de la Especialidad es obligatorio";
    }
    echo "<h3>".$Mensaje."</h3>";
?>