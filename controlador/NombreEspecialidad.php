<?php

include("bd.php");
//echo $Registro["CódigoEspecialidad"];
$ConsultaE="SELECT * from especialidad where CódigoEspecialidad='".$Registro["CódigoEspecialidad"]."'";
//echo $ConsultaE;
$ResultadoE=False;
    try {
        //print_r($Conexion);
        $ResultadoE= mysqli_query($Conexion,$ConsultaE);
        //print_r($ResultadoE);  
        }
    catch (Exception $e)
        { $Mensaje = "No se pudo consultar la especialidad";
            //$error=$e->getMessage();
            //print $e->getMessage();
            //print $Resultado;
        }
    if($ResultadoE == False) { $Mensaje = "No se pudo consultar la especialidad";
                    //die($mysqli_error($Conexion));
                }
    else {
       
    $RegistroE=$ResultadoE->fetch_assoc();
    echo $RegistroE["NombreEspecialidad"];                       
    }
?>