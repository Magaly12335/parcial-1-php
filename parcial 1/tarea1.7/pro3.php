<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="didi">
<h1 class="mango">7093.El lado más corto</h1>
    <ul id= "menu">
    <li><a href="index.html">Inicio</a></li>
        <li><a href="pro1.php">Problema 1</a></li>
        <li><a href="pro2.php">Problema 2</a></li>
        <li><a href="pro3.php">Problema 3</a></li>
        <li><a href="pro4.php">Problema 4</a></li>
    </ul>
    <hr>
    <p>Escribe un programa que, dadas las coordenadas de los vértices de un cuadrilátero, calcule la longitud de su lado más corto.</p>
    <br>
    <form action='pro3.php' method="post">
            Valor x1:
            <input type="text" name="txtValor1"><br><br>
            Valor y1:
            <input type="text" name="txtValor2"><br><br>
            Valor x2:
            <input type="text" name="txtValor3"><br><br>
            Valor y2:
            <input type="text" name="txtValor4"><br><br>
            Valor x3:
            <input type="text" name="txtValor5"><br><br>
            Valor y3:
            <input type="text" name="txtValor6"><br><br>
            Valor x4:
            <input type="text" name="txtValor7"><br><br>
            Valor y4:
            <input type="text" name="txtValor8"><br><br>
            <input type="submit" value="Enviar"> <br>
        </form>
        <?php
        if($_POST)
        { 
            $x1=$_POST['txtValor1'];
            $y1=$_POST['txtValor2'];
            $x2=$_POST['txtValor3'];
            $y2=$_POST['txtValor4'];
            $x3=$_POST['txtValor5'];
            $y3=$_POST['txtValor6'];
            $x4=$_POST['txtValor7'];
            $y4=$_POST['txtValor8'];

            $c1=$x1+$y1;
            $c2=$y2+$x2;
            $c3=$x3+$y3;
            $c4=$y4+$x4;

            echo "VALOR DE c1: " . $c1 . "<br>";
            echo "VALOR DE c2: " . $c2 . "<br>";
            echo "VALOR DE c3: " . $c3 . "<br>";
            echo "VALOR DE c4: " . $c4 . "<br>";

            $lado1=$c1-$c2;
            $lado2=$c2-$c3;
            $lado3=$c3-$c4;
            $lado4=$c1-$c4;
            
            if($lado1>$lado2 and $lado1>$lado3 and $lado1>$lado4)
            {
                echo"MEDIDA DEL VERTICE MÁS CORTO: " . $lado1;
            }
            if($lado2>$lado1 and $lado2>$lado3 and $lado2>$lado4)
            {
                echo"MEDIDA DEL VERTICE MÁS CORTO: " . $lado2;
            }
            if($lado3>$lado2 and $lado3>$lado1 and $lado3>$lado4)
            {
                echo"MEDIDA DEL VERTICE MÁS CORTO: " . $lado3;
            }
            if($lado4>$lado2 and $lado4>$lado3 and $lado4>$lado4)
            {
                echo"MEDIDA DEL VERTICE MÁS CORTO: " . $lado4;
            }
            
            

            
            
        }
        ?>
</body>
</html>