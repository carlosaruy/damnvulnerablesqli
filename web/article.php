<?php
$id = $_GET['id']; // Punto vulnerable a inyección SQL

// Conexión a la base de datos
$conn = new mysqli("localhost", "username", "password", "database");

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta vulnerable a SQL Injection
$sql = "SELECT title, content FROM articles WHERE id = $id";
$result = $conn->query($sql);

// Obtener el resultado
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $row['title'] ?></title>
</head>
<body>
    <h1><?= $row['title'] ?></h1>
    <p><?= $row['content'] ?></p>
</body>
</html>

<?php
$conn->close();
?>

