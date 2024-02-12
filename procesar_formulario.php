<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "luisinatorcassi@hotmail.com"; // Reemplaza con tu dirección de correo electrónico

    $asunto = "Nuevo mensaje de $nombre";
    $cuerpoMensaje = "Nombre: $nombre\nDirección de Email: $email\nMensaje: $mensaje";

    // Puedes personalizar el encabezado según tus necesidades
    $headers = "From: $email\r\n";

    // Envía el correo electrónico
    mail($destinatario, $asunto, $cuerpoMensaje, $headers);

    // Redirecciona a una página de confirmación o muestra un mensaje
    header("Location: confirmacion.html");
    exit();
}
?>