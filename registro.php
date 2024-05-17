<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
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

    // Inserta los datos en la tabla usuarios
    $sql = "INSERT INTO usuarios (nombre, apellido, correo, usuario, contrasena)
            VALUES ('$nombre', '$apellido', '$correo', '$usuario', '$contrasena')";

    if ($conn->query($sql) === TRUE) {
        // Redirige a la página principal si el registro es exitoso
        header("Location: principal.html");
        exit();
    } else {
        // Muestra un mensaje de error si el registro falla
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cierra la conexión
    $conn->close();
}
?>
