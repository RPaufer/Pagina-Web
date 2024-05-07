<?php

include("bd.php");

$Consulta="select * from proyecto";

$Resultado=False;
    try {
        $Resultado= mysqli_query($Conexion,$Consulta);
        }
    catch (Exception $e)
        { $Mensaje = "No se pudo consultar los proyectos";
            //$error=$e->getMessage();
            //print $e->getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "No se pudo consultar los proyectos";
                    //die($mysqli_error($Conexion));
                }
    else {
        echo '<table border="1">
        <tr>
            <td>Código Del proyecto</td>
            <td>Nombre Del Proyecto</td>
            <td>Resumen</td>
            <td>Fecha De Registro</td>
            <td colspan="2">Acciones</td>
        </tr>';
        while($Registro=$Resultado->fetch_assoc()){
            echo'
            <tr>
                <td>'.$Registro["CódigoProyecto"].'</td>
                <td>'.$Registro["NombreProyecto"].'</td>
                <td>'.$Registro["Resumen"].'</td>
                <td>'.$Registro["FechaRegistro"].'</td>
                <td><a href="ActualizacionProyecto.php?CódigoProyecto='.$Registro["CódigoProyecto"].'" >Editar<a/></td>
                    <td><a href="#" onclick="Preguntar('.$Registro["CódigoProyecto"].')"> Eliminar</a></td>
            </tr>';
        } //Fin del ciclo del listado de proyectos
    echo '</table>';
    }
    
?>

<script type="text/javascript">
    function Preguntar(CódigoProyecto)
    {
        if(confirm("¿Esta seguro de eliminar el estudiante con codigo "+CódigoProyecto+"?"))
        {
            window.location.href = "Proyectos.php?CódigoProyecto="+CódigoProyecto;
        }
    }

</script>