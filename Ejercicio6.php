<?php
// Iniciar la sesión (si aún no está iniciada)
session_start();

// Verificar si la variable de sesión 'visitas' existe
if (!isset($_SESSION['visitas'])) {
    // Si no existe, inicializarla a 1 (primera visita)
    $_SESSION['visitas'] = 1;
} else {
    // Si existe, incrementar el contador de visitas
    $_SESSION['visitas']++;
}

// Mostrar el número de visitas
$numeroDeVisitas = $_SESSION['visitas'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contador de Visitas</title>
</head>
<body>
    <h1>Bienvenido a mi página</h1>
    <p>Has visitado esta página <?php echo $numeroDeVisitas; ?> veces.</p>
</body>
</html>
<?php


include "Ejercicio2.php"
?>