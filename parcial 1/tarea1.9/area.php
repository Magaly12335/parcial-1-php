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
    $base=$_POST["txtBase"];
    $altura=$_POST["txtAltura"];+
    $res=$base*$altura;
    echo"el area de tu rectangulo es: ", $res;
    
}
?>