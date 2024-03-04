<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="didi">
<h1 class="mango">11338. Escalera de asteriscos</h1>
    <ul id= "menu">
    <li><a href="index.html">Inicio</a></li>
        <li><a href="pro1.php">Problema 1</a></li>
        <li><a href="pro2.php">Problema 2</a></li>
        <li><a href="pro3.php">Problema 3</a></li>
        <li><a href="pro4.php">Problema 4</a></li>
    </ul>
    <hr>
    <form action='pro4.php' method="post">
            Valor de N:
            <input type="text" name="txtVal"><br><br>
            <input type="submit" value="Enviar"> <br>
        </form>
        <?php
        if($_POST)
        { 
            $n=$_POST['txtVal'];
            echo "VALOR DE N: " . $n . "<br>";
            for($i=1; $i<=$n; $i++)
            {
                for($x=1; $x<=$i; $x++)
                {
                    echo"#";
                }
                echo"<br>";
            }
            
        }
        ?>
</body>
</html>