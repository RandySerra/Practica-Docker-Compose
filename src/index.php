<?php
echo "Hola Mundo<br>";

$servername = "db";  // Este nombre de host debe coincidir con el nombre del servicio de la base de datos en docker-compose.yml
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$dbname = getenv('MYSQL_DATABASE');

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
