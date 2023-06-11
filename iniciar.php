<?php
    include("ConexionBD.php");
    if (isset ($_POST['Iniciar']) )
    {
        if(
        strlen ($_POST['nombreUsuario']) >= 1 &&
        strlen ($_POST['Contraseña']) >= 1 )
        {
            $nameUser = trim ($_POST['nombreUsuario']);

            $consulta = "SELECT *FROM personas WHERE NombreUsuario='$nameUser' AND Contraseña='$pass' ";
            $resultado = mysqli_query($conex, $consulta);
                if($resultado)
                {
                    echo "¡Has iniciado sesión con éxito!";
                }
                else
                {
                    echo "¡Ups, ha ocurrido un error!";
                }
        }
    } 
?>