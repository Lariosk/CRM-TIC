<?php
    // Procesar el formulario de registro
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Aquí iría la lógica para guardar los datos del usuario en la base de datos
    }
?>