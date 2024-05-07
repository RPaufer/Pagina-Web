<?php
if (!empty($_POST["Código"]) && !empty($_POST["NombreProyecto"]) && !empty($_POST["Resumen"]) && !empty($_POST["FechaRegistro"])) {
    $Código = $_POST["Código"]; 
    $NombreProyecto = $_POST["NombreProyecto"]; 
    $Resumen = $_POST["Resumen"]; 
    $FechaRegistro = $_POST["FechaRegistro"];

    include("bd.php");
    $Consulta="INSERT INTO proyecto (CódigoProyecto, NombreProyecto, Resumen, FechaRegistro) VALUES ('".$Código."', '".$NombreProyecto."', '".$Resumen."', '".$FechaRegistro."')";
    $Resultado=False;

    //echo $Consulta;
    try {
        $Resultado= mysqli_query($Conexion, $Consulta);
        }
    catch (Exception $e)
        { $Mensaje = "No se pudo registrar el Proyecto por error en los datos";
            //$error=$e->getMessage();
            //print $e->getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "No se pudo el Proyecto";
                    //die($mysqli_error($Conexion));
                }
    else {$Mensaje = "El Proyecto se registró correctamente";}
    }//Fin del if
   else {
        $Mensaje = "Todos los campos son obligatorios";
    }
    echo "<h3>".$Mensaje."</h3>";
?>