

<!DOCTYPE html>
<html>
<head>
    <title>Formatear Texto</title>
</head>
<body>
    <h1>Formatear Texto</h1>
    <form method="post" action="Ejercicio5.php">
        <label for="texto">Introduce tu texto:</label><br>
        <textarea name="texto" id="texto" rows="4" cols="50"></textarea><br><br>

        <label for="color">Color de Texto:</label>
        <select name="color" id="color">
            <option value="black">Negro</option>
            <option value="red">Rojo</option>
            <option value="blue">Azul</option>
            <option value="green">Verde</option>
        </select><br><br>

        <label for="fuente">Tipo de Fuente:</label>
        <select name="fuente" id="fuente">
            <option value="Arial, sans-serif">Arial</option>
            <option value="Times New Roman, serif">Times New Roman</option>
            <option value="Courier New, monospace">Courier New</option>
            <option value="Verdana, sans-serif">Verdana</option>
        </select><br><br>

        <label for="tamano">Tamaño de Texto:</label>
        <select name="tamano" id="tamano">
            <option value="12px">Pequeño</option>
            <option value="16px">Mediano</option>
            <option value="20px">Grande</option>
            <option value="24px">Muy Grande</option>
        </select><br><br>

	<label for="guardar">¿Deseas guardar la información?</label>
        <select id="guardar" name="guardar">
            <option value="si">Sí</option>
            <option value="no">No</option>
        </select><br>

        <input type="submit" value="Formatear">
    </form>
</body>
</html>

<?php
include "Ejercicio2.php"
?>