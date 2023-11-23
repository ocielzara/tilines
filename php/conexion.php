<?php
    $servername = "127.0.0.1";
    $database = "nckbkefppq";
    $username = "nckbkefppq";
    $password = "4Bdh4QBjQV";
    
    
    
    // Create connection
    $conexion = mysqli_connect($servername, $username, $password, $database);
    
   
    
    // Check connection
    if (!$conexion) {
        echo("La conexion fallo: " . mysqli_connect_error());
    }
    
   
    /* cambiar el conjunto de caracteres a utf8 */
    if (!mysqli_set_charset($conexion, "utf8")) {
        printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($conexion));
        exit();
    } else {
        
    }
    
   
    ?>
        