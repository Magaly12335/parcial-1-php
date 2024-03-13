<html>
    <head></head>
    <body>
    <ul id = "menu">
        <li><a href="main.html">Inicio</a></li>
    </ul>
    </body>
</html>
<?php
if($_POST)
{
    echo"<h3>AREA DE UN RECTANGULO</h3>";
    $nivel=$_POST["txtNivel"];
    for ($i = $nivel; $i >= 1; $i--) {
        for ($j = $nivel; $j > $i; $j--) {
            echo "_"; // Espacios para alinear el triángulo a la derecha
        }
        for ($k = 1; $k <= $i; $k++) {
            echo "* ";
        }
        echo "<br>";
    }
    
}
?>