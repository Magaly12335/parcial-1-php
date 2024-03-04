<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="didi">
<h1 class="mango">7050.Cálculos condicionales</h1>
    <ul id= "menu">
    <li><a href="index.html">Inicio</a></li>
        <li><a href="pro1.php">Problema 1</a></li>
        <li><a href="pro2.php">Problema 2</a></li>
        <li><a href="pro3.php">Problema 3</a></li>
        <li><a href="pro4.php">Problema 4</a></li>
    </ul>
    <hr>
    <p>-Si el valor actual de N es par, divídelo entre 2. En caso contrario, súmale 1. <br>
       -Si el valor actual de N tiene tres o más cifras, divídelo entre 100. Pero si tiene exactamente dos cifras, divídelo entre 10. <br>
       -Si el valor actual de N es un múltiplo de tres, réstale uno. <br></p>
    <form action='pro1.php' method="post">
            VALOR DE N:
            <input type="text" name="txtValor"><br>
            <input type="submit" value="Enviar"> <br>
            <br>
        </form>
        <?php
        if($_POST)
        { 
            $N=$_POST['txtValor'];
            echo "VALOR DE N: " . $N . "<br>";
            if($N%2==0)
            {
                $A=$N%2;
                if($A>=100)
                {
                    $B=$A%100;
                    echo"VALOR FINAL DE N: " . $B;
                    if($B%3==0)
                    {
                        $C=$B-1;
                        echo"VALOR FINAL DE N: " . $C;
                    }
                    
                }
                if($A<100 and $A>10)
                {
                    $B=$A%10;
                    echo"VALOR FINAL DE N: " . $B;
                    if($B%3==0)
                    {
                        $C=$B-1;
                        echo"VALOR FINAL DE N: " . $C;
                    }
                    
                }
            }
            else
            {
                $A=$N+1;
                if($A>=100)
                {
                    $B=$A%100;
                    echo"VALOR FINAL DE N: " . $B;
                    if($B%3==0)
                    {
                        $C=$B-1;
                        echo"VALOR FINAL DE N: " . $C;
                    }
                    
                }
                if($A<100 and $A>10)
                {
                    $B=$A%10;
                    echo"VALOR FINAL DE N: " . $B;
                    if($B%3==0)
                    {
                        $C=$B-1;
                        echo"VALOR FINAL DE N: " . $C;
                    }
                    
                }
                echo"VALOR FINAL DE N: " . $A;
            }
        }

        ?>

</body>
</html>