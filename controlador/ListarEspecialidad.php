<?php

include("bd.php");

$Consulta="select * from especialidad";

$Resultado=False;
    try {
        $Resultado= mysqli_query($Conexion,$Consulta);
        }
    catch (Exception $e)
        { $Mensaje = "No se pudo consultar las especialidades";
            //$error=$e->getMessage();
            //print $e->getMessage();
            //print $Resultado;
        }
    if($Resultado == False) { $Mensaje = "No se pudo consultar las especialidades";
                    //die($mysqli_error($Conexion));
                }
                else {
                    echo '<table border="1">
                    <tr>
                        <td>Código De La Especialidad</td>
                        <td>Nombre De La Especialidad</td>
                        <td colspan="2">Acciones</td>
                    </tr>';
                    while($Registro=$Resultado->fetch_assoc()){
                        echo'
                        <tr>
                            <td>'.$Registro["CódigoEspecialidad"].'</td>
                            <td>'.$Registro["NombreEspecialidad"].'</td>
                            <td><a href="ActualizacionEspecialidad.php?CódigoEspecialidad='.$Registro["CódigoEspecialidad"].'" >Editar<a/></td>
                            <td><a href="#" onclick="Preguntar('.$Registro["CódigoEspecialidad"].')"> Eliminar</a></td>
                        </tr>';
                    } //Fin del ciclo del listado de especialidades
                echo '</table>';
                }
?>

<script type="text/javascript">
    function Preguntar(CódigoEspecialidad)
    {
        if(confirm("¿Esta seguro de eliminar el estudiante con codigo de especialidad "+CódigoEspecialidad+"?"))
        {
            window.location.href = "Especialidades.php?CódigoEspecialidad="+CódigoEspecialidad;
        }
    }

</script>