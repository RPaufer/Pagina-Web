<?php

//echo "Codido de estudiante ".$_GET["CodigoEstudiante"];

if(!empty($_GET["CódigoProyecto"])){
include("bd.php");
$CódigoProyecto = $_GET["CódigoProyecto"];
$ConsultaDel="DELETE FROM proyecto WHERE proyecto.CódigoProyecto = ".$CódigoProyecto;

//echo $ConsultaDel;

$ResultadoDel=False;
 try{
    $ResultadoDel =mysqli_query($Conexion,$ConsultaDel);
    }
    catch(Exception $e)
       {$Mensaje="No se pudo eliminar el estudiante con codigo del proyecto:".$CódigoProyecto;
        //$error=$e->getMessage();
        print $e->getMessage();
        //print $Resultado;
       }
 
 if($ResultadoDel == false ) {$Mensaje="No se pudo eliminar el estudiante con codigo del proyecto".$CódigoProyecto;
               //die($mysqli_error($Conexion));
            }
 else{ $Mensaje="se pudo eliminar el estudiante con codigo del proyecto".$CódigoProyecto;
   }
echo $Mensaje;
} //Fin si externo
?>