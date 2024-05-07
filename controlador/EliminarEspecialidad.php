<?php

//echo "Codido de estudiante ".$_GET["CodigoEstudiante"];

if(!empty($_GET["CódigoEspecialidad"])){
include("bd.php");
$CódigoEspecialidad = $_GET["CódigoEspecialidad"];
$ConsultaDel="DELETE FROM especialidad WHERE especialidad.CódigoEspecialidad = ".$CódigoEspecialidad;

//echo $ConsultaDel;

$ResultadoDel=False;
 try{
    $ResultadoDel =mysqli_query($Conexion,$ConsultaDel);
    }
    catch(Exception $e)
       {$Mensaje="No se pudo eliminar el estudiante con codigo de la especialidad:".$CódigoEspecialidad;
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
       }
 
 if($ResultadoDel == false ) {$Mensaje="No se pudo eliminar el estudiante con codigo de la especialidad".$CódigoEspecialidad;
               //die($mysqli_error($Conexion));
            }
 else{ $Mensaje="se pudo eliminar el estudiante con codigo de la especialidad".$CódigoEspecialidad;
   }
echo $Mensaje;
} //Fin si externo
?>