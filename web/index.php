<?php
// Conexión a la base de datos
#$conn = new mysqli("localhost", "username", "password", "database");
#en docker se hace lio con localhost cuando estan separados los containers
$conn = new mysqli("db", "user", "userpass", "damnvulnerablesqli");

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener todos los artículos
$sql = "SELECT id, title FROM articles";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Artículos</title>
</head>
<body>
    <h1>Artículos Disponibles</h1>
    <?php if ($result->num_rows > 0): ?>
        <ul>
            <?php while ($row = $result->fetch_assoc()): ?>
                <li>
                    <a href="article.php?id=<?= $row['id'] ?>"><?= $row['title'] ?></a>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>No hay artículos disponibles.</p>
    <?php endif; ?>
    <a href="login.php">Iniciar sesión</a>
</body>
</html>

<?php
$conn->close();
?>

