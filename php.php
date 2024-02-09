<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $comentario = $_POST["comentario"];

    // Validar que todos los campos estén llenos
    if (!empty($nombre) && !empty($apellido) && !empty($email) && !empty($telefono) && !empty($comentario)) {
        // Configura el correo electrónico
        $to = "correo_destino@example.com";
        $subject = "Nuevo mensaje del formulario de contacto";
        $message = "Nombre: $nombre\nApellido: $apellido\nEmail: $email\nTeléfono: $telefono\nComentario: $comentario";

        // Envía el correo electrónico
        $enviado = mail($to, $subject, $message);

        if ($enviado) {
            // Redirige a la misma página con un parámetro de éxito
            header("Location: tu_pagina.php?exito=1");
            exit();
        } else {
            echo "Error al enviar el correo.";
        }
    } else {
        echo "Por favor, complete todos los campos.";
    }
}
?>
