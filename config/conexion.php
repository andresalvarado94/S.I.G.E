<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sige_system";

 // Crear la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

 // Verificar si hay errores de conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }else
        echo ("Conexión con éxito!");

 // Escapar los datos del formulario para evitar inyección de SQL
    $email = $conn->real_escape_string($_POST['femail']);
    $password = $conn->real_escape_string($_POST['fpassword']);

?>