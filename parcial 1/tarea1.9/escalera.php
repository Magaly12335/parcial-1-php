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
    echo"<h3>IMPRIME LA FRASE EN ESCALERA</h3>";
    $frase=$_POST["txtFrase"];+
    $t=strlen($frase);
    for($i=0; $i<$t; $i++)
    {
        for($j=0; $j<=$i; $j++)
        {
            echo $frase[$j];
        }
        echo"<br>";
    }
}
?>