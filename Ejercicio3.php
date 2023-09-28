<?php 

// Obtener el mes actual como número (1-12)
$mesActual = date('n');

// Definir los rangos de las estaciones
$primavera = range(3, 5);
$verano = range(6, 8);
$otoño = range(9, 11);

// Determinar la estación basada en el mes actual
if (in_array($mesActual, $primavera)) {
    $mensaje = "¡Feliz primavera!";
} elseif (in_array($mesActual, $verano)) {
    $mensaje = "¡Feliz verano!";
} elseif (in_array($mesActual, $otoño)) {
    $mensaje = "¡Feliz otoño!";
} else {
    $mensaje = "¡Feliz invierno!";
}

// Mostrar el mensaje
echo $mensaje;


include "Ejercicio2.php"
?>