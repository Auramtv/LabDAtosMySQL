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

// Consultar los usuarios registrados
$query = "SELECT * FROM usuarios";
$result = $conexion->query($query);

if ($result->num_rows > 0) {
    echo "<h1>Usuarios Registrados</h1>";
    while ($row = $result->fetch_assoc()) {
        echo "Nombre: " . $row["nombre"] . "<br>";
        echo "Primer Apellido: " . $row["primer_apellido"] . "<br>";
        echo "Segundo Apellido: " . $row["segundo_apellido"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Login: " . $row["login"] . "<br>";
        echo "<br>";
    }
} else {
    echo "No se encontraron usuarios registrados.";
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
