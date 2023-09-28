
<!DOCTYPE html>
<html>
<head>
    <title>Resultado del Formateo</title>
</head>
<body>
    <?php
    // Obtener los valores del formulario
    $texto = $_POST["texto"];
    $color = $_POST["color"];
    $fuente = $_POST["fuente"];
    $tamano = $_POST["tamano"];

    // Aplicar el formato con CSS en línea
    echo "<p style='color: $color; font-family: $fuente; font-size: $tamano;'>$texto</p>";
    ?>
</body>
</html>


<?php
include "Ejercicio2.php"
?>