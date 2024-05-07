<?php
    include("bd.php");

    $Consulta="SELECT * FROM estudiantes";

    $Resultado=False;
    try {
        $Resultado= mysqli_query($Conexion,$Consulta);
        }
    catch (Exception $e)
        { $Mensaje = "No se pudo consultar a el estudiante";
            //$error=$e->getMessage();
            //print $e->getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "No se pudo consultar a el estudiante";
                    //die($mysqli_error($Conexion));
                }
    else {
        echo '<select name="NombreEstudiante" id="NombreEstudiante">';
        while($Registro=$Resultado->fetch_assoc()){
            echo '<option value="'.$Registro["CódigoProyecto"].
            '">'.$Registro["NombreEstudiante"].'</option>';
        } //Fin del ciclo del listado de estudiantes
    echo '</select>';
    }
?>