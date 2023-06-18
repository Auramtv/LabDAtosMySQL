<?php
// Datos de conexión a la base de datos MySQL
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'laboratorio';

// Conexión a la base de datos
$conexion = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$primerApellido = $_POST['primer_apellido'];
$segundoApellido = $_POST['segundo_apellido'];
$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];

// Verificar si el correo electrónico ya está registrado
$query = "SELECT * FROM usuarios WHERE email='$email'";
$result = $conexion->query($query);

if ($result->num_rows > 0) {
    echo "El correo electrónico ya está registrado. Por favor, intenta con otro.";
} else {
    // Insertar los datos en la base de datos
    $insertQuery = "INSERT INTO usuarios (nombre, primer_apellido, segundo_apellido, email, login, password) VALUES ('$nombre', '$primerApellido', '$segundoApellido', '$email', '$login', '$password')";
    if ($conexion->query($insertQuery) === TRUE) {
        echo "Registro completado con éxito.<br><br>";
        echo "<a href='consulta.php'>Consultar usuarios registrados</a>";
    } else {
        echo "Error al registrar los datos: " . $conexion->error;
    }
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
