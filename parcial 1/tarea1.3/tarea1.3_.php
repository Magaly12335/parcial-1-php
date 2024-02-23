<html>
<head>
</head>
<body>
<h1>5630. Colegiatura</h1>

<h2>Descripción</h2>
La mamá de Esteban quiere inscribirlo en 
la mejor preparatoria de Cuernavaca, pero 
le preocupa cuanto vaya a  <br> pagar, y te pide 
ayuda para que hagas un programa que le diga
 cuanto tenga que pagar. 
El esquema que maneja <br> la prepa es este:
<br>
Plan de pagos:
<br>
-La colegiatura de los alumnos se 
determina según el numero de materias que
 cursan. El costo de cada <br> una de las materias 
 es de $1600.
<br>
Se ha establecido un programa para estimular
a los alumnos, el cual consiste en lo siguiente:
si el promedio obtenido por un alumno 
en el ultimo periodo es mayor o igual que 9,
se le hará un descuento del 30% sobre la
colegiatura y no se le cobrara IVA;
si el promedio obtenido es menor que 9 
deberá pagar la colegiatura completa,
 mas el IVA del 16%.

 <h2>Entrada</h2>
 El numero de materias "A" que Esteban va 
 a cursar. Y un numero con decimales "B"
 que es el promedio de Esteban.

 <h2>Salida</h2>
 Un numero entero "C"con el precio a pagar. 
 Debe de ir con un $.

 <h2>Límites</h2>
 -1 < A < 20 <br>
 -0 < B < 11

<br>

<!-- TABLA -->
<h2>Ejemplo</h2>
<table border="2" cellpadding="4">
    <tr>
        <th>Entrada</th>
        <th>Salida</th>
    </tr>
<tr>
    <td>5 <br> 9.6</td>
    <td>$5600</td>
</tr>
<tr>
    <td>8 <br> 7.8</td>
    <td>$14848</td>
</tr>
<tr>
    <td>2 <br> 8</td>
    <td>$3712</td>
</tr>
</table>
<br>
<br>
<h3>OPERACIONES</h3>
<?php
# CODIGO PHP PARA EL PROMEDIO
$A=2;
$B=8;
# OPERACION 9*30/100
$cole=1600*$A;
if($B>=9)
{
   $x=$cole*30;
   $y=$x/100;
   $z=$cole-$y;
   echo "Resultado: $", $z, "<br>";
}
else
{
   $x=$cole*16;
   $y=$x/100;
   $z=$cole+$y;
   echo "Resultado: $", $, "<br>";
}
?>
</body>
</html>