<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del comentario del formulario
    $comment = mysqli_real_escape_string($conexion, $_POST["deseo"]);
    // Obtiene la fecha y hora actual en el formato 'AAAA-MM-DD HH:MM:SS'
    $date = date('Y-m-d H:i:s');

    // Prepara la consulta SQL para insertar el comentario en la base de datos
    $sql = "INSERT INTO deseos (comment, date) VALUES ('$comment', '$date')";

    // Ejecuta la consulta y verifica si se insertó correctamente
    if (mysqli_query($conexion, $sql)) {
         // Output JavaScript to show an alert and perform the redirection
         echo '<script>';
         echo 'alert("Gracias por el deseo!");';
         echo 'window.location.href = "../index.php";'; // Redirect using JavaScript
         echo '</script>';
    } else {
        echo "Error al guardar el comentario: " . mysqli_error($conexion);
    }
    

     // Cierra la conexión a la base de datos
     mysqli_close($conexion);
    
     // Avoid further code execution after JavaScript redirect
     exit();
 } else {
     // Handle invalid requests
     echo "Invalid request";
 }
?>
