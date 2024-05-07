<?php

//echo "Codido de estudiante ".$_GET["CodigoEstudiante"];

if(!empty($_GET["CódigoEstudiante"])){
include("bd.php");
$CódigoEstudiante = $_GET["CódigoEstudiante"];
$ConsultaDel="DELETE FROM estudiante WHERE estudiante.CódigoEstudiante = ".$CódigoEstudiante;

//echo $ConsultaDel;

$ResultadoDel=False;
 try{
    $ResultadoDel =mysqli_query($Conexion,$ConsultaDel);
    }
    catch(Exception $e)
       {$Mensaje="No se pudo eliminar el estudiante con codigo:".$CódigoEstudiante;
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
       }
 
 if($ResultadoDel == false ) {$Mensaje="No se pudo eliminar el estudiante con codigo".$CódigoEstudiante;
               //die($mysqli_error($Conexion));
            }
 else{ $Mensaje="se pudo eliminar el estudiante con codigo".$CódigoEstudiante;
   }
echo $Mensaje;
} //Fin si externo
?>