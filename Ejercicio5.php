<?php

$text = $_POST['texto'];
$color = $_POST['color'];
$fuente = $_POST['fuente'];
$tamano = $_POST['tamano'];

if ($_POST['guardar'] == 'si') {
   
    setcookie('text', $text, time() + 3600, '/');
}

// Mostrar el texto formateado con CSS en línea
echo '<div style="color: ' . $color . '; font-family: ' . $fuente . '; font-size: ' . $tamano . 'px;">';
echo $text;
echo '</div>';
?>

<?php
// Incluir el pie de página
include 'Ejercicio2.php';
?>
