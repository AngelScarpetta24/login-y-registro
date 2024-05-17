<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Conexion a la base de datos 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "inyeccion";

    $conn = new mysqli($servername, $username, $password, $database);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Busca el usuario en la base de datos
    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Usuario encontrado, redirige a la página principal
        header("Location: principal.html");
        exit();
    } else {
        // Usuario no encontrado, muestra un mensaje de error
        echo "Usuario o contraseña incorrectos";
    }

    // Cierra la conexión
    $conn->close();
}
?>
