<?php 
    include("ConexionBD.php");
    if (isset ($_POST['Registrarme']) ) {
        if( strlen ($_POST['Nombre']) >= 1 &&
            strlen ($_POST['Apellidos']) >= 1 &&
            strlen ($_POST['Correo']) >= 1 &&
            strlen ($_POST['nombreUsuario']) >= 1 &&
            strlen ($_POST['Contraseña']) >= 1 ) {
            $name = trim ($_POST["Nombre"]);
            $lastNames = trim ($_POST['Apellidos']);
            $email = trim ($_POST['Correo']);
            $nameUser = trim ($_POST['nombreUsuario']);
            $pass = trim ($_POST['Contraseña']);
            $consulta = "INSERT INTO personas VALUES ('".$nameUser."', '".$name."', '".$lastNames."', '".$email."', '".$pass."')";
                $resultado = mysqli_query($conex, $consulta);
                if($resultado){
                    echo "¡Te has registrado con éxito!";
                }else{
                    echo "¡Ups, ha ocurrido un error!";
                }
        }else {
            echo "¡Por favor, Completa todos los campos!";
        }    
    }
?>