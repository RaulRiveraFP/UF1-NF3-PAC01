<?php


// Coger la fecha actual y con el strtotime restarle dos dias
$twoDaysAgo = date('F j, Y', strtotime('-2 days'));

// Coger el mes que viene
$nextMonth = date('F', strtotime('first day of next month'));

// Calcular el numero de dias que quedan para el próximo mes
$daysLeftInNextMonth = date('t') - date('j');

// Cojemos el mes actual y se lo restamos a 12 para tener la diferencia
$monthsLeftInCurrentYear = 12 - date('n');

echo "Hace dos días era $twoDaysAgo.";
echo "El próximo mes será $nextMonth.";
echo "Quedan $daysLeftInNextMonth días para el mes que viene.";
echo "Quedan $monthsLeftInCurrentYear meses para terminar el año.";


?>
