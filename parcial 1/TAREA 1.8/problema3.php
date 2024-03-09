<!DOCTYPE html>
                <html class="problema1">
                <body>
                    <head>
                    <link rel="stylesheet" href="estilos.css">
                    </head>
                    <h3>Devuelta al Menu</h3>
                <ul class="Menu-problema1">
    <li><a href="index1_8.php">Menu</a></li>
    </ul>
                <h2>Problemas 1 de la tarea 1.8 <hr></h2>
                <h3>3991. Adquisición de Letras</h3>
                <h2>Descripcion</h2>
                <p>
 En el ITAM, a los alumnos que estudian ingeniería les gusta comer letras. A Miguel le encanta la letra "d" y 
quiere saber cuántas se va a poder comer de un paquete que la escuela proporciona a todos sus alumnos.
El paquete que la escuela entrega es una palabra con letras minúsculas del alfabeto.
                </p> <br>
                <h2>Entrada</h2>
                <p>
                Un solo string de letras minúsculas.
                </p>
                <h2>Salida</h2>
                <p>
                La cantidad de veces que aparece la letra favorita de Miguel.
                </p>
                <table border="1" cellspacing="3" cellspacing="3">
                        <tr>
                            <th>Entrada</th>
                            <th>Salida</th>
                        </tr>
                        <tr>
                            <td>abcjdlllld
                            </td>
                            <td>2<br>
                            </td>
                        </tr>
                </table>
                <h2>Resultado</h2>
<!-- //CODIGO PHP -->
<?php
$datos = 'abcjdlllld';
$letra = substr_count($datos, 'd');

echo "El número de la letra fav de miguel son: " . $letra;
?>
</body>
</html>                
