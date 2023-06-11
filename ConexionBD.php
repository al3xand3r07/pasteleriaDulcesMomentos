<?php

    $conex = mysqli_connect("localhost", "root", "", "usuarios");
    if ($conex) {
    	echo "Conexión Establecida";
    } else {
    	echo "Conexión Fallida";
    }

?>