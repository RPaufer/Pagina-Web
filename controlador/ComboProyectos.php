<?php
    include("bd.php");

    $ConsultaPRO="SELECT * FROM proyecto";

    $ResultadoPRO=False;
    try {
        $ResultadoPRO= mysqli_query($Conexion,$ConsultaPRO);
        }
    catch (Exception $e)
        { $Mensaje = "No se pudo consultar los proyectos";
            //$error=$e->getMessage();
            //print $e->getMessage();
            //print $Resultado;
        }
    if($ResultadoPRO == False) { $Mensaje = "No se pudo consultar los proyectos";
                    //die($mysqli_error($Conexion));
                }
    else {echo $Registro["CódigoProyecto"];}
        echo '<select name="ProyectoEstudiante" id="ProyectoEstudiante">';
        while($RegistroPRO=$ResultadoPRO->fetch_assoc()){
            if($Registro["CódigoProyecto"]==$RegistroPRO["CódigoProyecto"]) {
                echo '<option value="'.$RegistroPRO["CódigoProyecto"].'" selected>'.$Registro["CódigoProyecto"].'</option>';
            }
            else {
                echo '<select name="ProyectoEstudiante" id="ProyectoEstudiante">';
        } //Fin del ciclo del listado de proyectos
            echo '</select>';
    }
?>