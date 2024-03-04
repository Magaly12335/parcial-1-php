<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="didi">
<h1 class="mango">18710.Formulota</h1>
    <ul id= "menu">
    <li><a href="index.html">Inicio</a></li>
        <li><a href="pro1.php">Problema 1</a></li>
        <li><a href="pro2.php">Problema 2</a></li>
        <li><a href="pro3.php">Problema 3</a></li>
        <li><a href="pro4.php">Problema 4</a></li>
    </ul>
    <hr>
    <p>Diseñar un programa que pregunte los valores de las variables x,y,z y evalue la función f(x,y,z).<br></p>
    <p>f(x, y, z)= (((x + y)/2x) + ((x*x*x)+(y*y*y))/((x*x)+(y*y))) / ((x*x) + (y*y) + (z*z))</p>
    <form action='pro2.php' method="post">
            Valor 1:
            <input type="text" name="txtValor1"><br><br>
            Valor 2:
            <input type="text" name="txtValor2"><br><br>
            Valor 3:
            <input type="text" name="txtValor3"><br><br>
            <input type="submit" value="Enviar"> <br>
        </form>
        <?php
        if($_POST)
        { 
            $x=$_POST['txtValor1'];
            $y=$_POST['txtValor2'];
            $z=$_POST['txtValor3'];
            echo "VALOR DE x: " . $x . "<br>";
            echo "VALOR DE y: " . $y . "<br>";
            echo "VALOR DE z: " . $z . "<br> <br>";

            $f=(($x+$y)/(2*$x))+((($x*$x*$x)+($y*$y*$y))/(($x*$x)+($y*$y)));
            $f2=(($x*$x)+($y*$y)+($z*$z));
            $f3=$f+$f2;
            echo"RESPUESTA: " . round($f3, 6);
        }
        ?>
</body>
</html>