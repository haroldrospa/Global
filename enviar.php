<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $para = "haroldrospa@gmail.com";
    $titulo = "Mensaje de $nombre - $asunto";
    $contenido = "De: $nombre\nCorreo Electrónico: $email\nMensaje:\n$mensaje";

    mail($para, $titulo, $contenido);

    echo "¡Gracias! Tu mensaje ha sido enviado.";
}
?>
