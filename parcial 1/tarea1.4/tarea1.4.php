<html>
<head>
</head>
<body>
<h1>13433. Estaciones del Año</h1>

<h2>Descripción</h2>
Brithany quiere combinar la programación 
con el inglés, y se encuentra empezando a 
usar las estructuras de control selectivas 
en la programación estructurada, como
 ejercicio necesita desarrollar un programa
  que sea capaz de especificar a que 
  estación (su nombre en inglés) del 
  año pertenece una fecha en especifico 
  compuesta por un día "d"
 y un mes "m"
 según lo siguiente:
 <br>
 -Winter del 21 de diciembre al 20 de marzo
 -Spring del 21 de marzo al 21 de junio
 -Summer del 22 de junio al 22 de septiembre
  -Fall del 23 de septiembre al 20 de diciembre
<br>
 Considerando la siguiente cantidad de días para 
 cada mes:
 <br>
 Enero, Marzo, Mayo, Julio, Agosto, 
 Octubre y Diciembre 31 días. <br>
Abril, Junio, Septiembre y Noviembre 30 días
Febrero 28 días. <br>
Cualquier fecha fuera de estos rangos debe considerarse
 como no existente. <br>
 Ayuda a Brithany a crear 
 ese programa usando estructuras de 
 control selectivas.


 <h2>Entrada</h2>
 Dos números enteros "d"
 y "m"
 separados por un espacio que
  corresponden al día 
 y mes de una fecha determinada
 
 <h2>Salida</h2>
 Una cadena "s"
 que indique la estación del año 
 a la que pertenece la fecha ingresada 
 o un mensaje que indique no existe la fecha, 
 si la fecha no es válida


<br>

<!-- TABLA -->
<h2>Ejemplo</h2>
<table border="2" cellpadding="4">
    <tr>
        <th>Entrada</th>
        <th>Salida</th>
    </tr>
<tr>
    <td>15 10</td>
    <td>Fall</td>
</tr>
<tr>
    <td>22 3</td>
    <td>Spring</td>
</tr>
<tr>
    <td>31 4</td>
    <td>No existe la fecha</td>
</tr>
</table>
<br>
<br>
<h3>OPERACIONES</h3>
<?php
$d=15;
$m=10;




?>
<hr>

<h1>7294. ¿Cuantos valen 7?</h1>

<h2>Descripción</h2>
Escribe un programa que lea dos
 enteros e imprima cuántos de ellos
 valen 7.

<h2>Entrada</h2>
Dos enteros en el rango de -100
 a +100.

<h2>Salida</h2>
La cantidad de enteros iguales a 7.

<br>

<!-- TABLA -->
<h2>Ejemplo</h2>
<table border="2" cellpadding="4">
    <tr>
        <th>Entrada</th>
        <th>Salida</th>
    </tr>
<tr>
    <td>-3 8</td>
    <td>0</td>
</tr>
<tr>
    <td>7 57</td>
    <td>1</td>
</tr>
<tr>
    <td>62 7</td>
    <td>1</td>
</tr>
<tr>
    <td>7 7</td>
    <td>2</td>
</tr>
</table>
<br>
<br>
<h3>OPERACIONES</h3>
<?php
$a=7;
$b=12;
echo"Variables: <br>"; 

echo"a:", $a, "<br>";
echo"b:", $b, "<br>";
if($a==7 and $b==7)
{
    echo"Respuesta: 2";
}
if($a==7 or $b==7)
{
    echo"Respuesta: 1";
}

?>

<hr>


<h1>7341.El mayor de tres numeros </h1>


<h2>Descripción</h2>
Realiza un programa que imprima el mayor de 3 números.

<h2>Entrada</h2>
Escribe tres números enteros a, b, c.

<h2>Salida</h2>
El número entero mayor de los tres números introducidos.


<br>

<!-- TABLA -->
<h2>Ejemplo</h2>
<table border="2" cellpadding="4">
    <tr>
        <th>Entrada</th>
        <th>Salida</th>
    </tr>
<tr>
    <td>10 <br> 8 <br> -7</td>
    <td>10</td>
</tr>
<tr>
    <td>10 <br> 81 <br> 101</td>
    <td>101</td>
</tr>
<tr>
    <td>11 <br> 11 <br> 11</td>
    <td>1</td>
</tr>
<tr>
    <td>10 <br> 810 <br> 101</td>
    <td>810</td>
</tr>
</table>
<br>
<br>
<h3>OPERACIONES</h3>
<?php
$a=10;
$b=810;
$c=101;
echo"Variables: <br>";
echo"a: ", $a, "<br>";
echo"b: ", $b, "<br>";
echo"c: ", $c, "<br>";

if($a>$b and $a>$c)
{
    echo"Resultado: ", $a;
}
if($b>$a and $b>$c)
{
    echo"Resultado: ", $b;
}
else
{
    echo"Resultado: ", $c;
}

?>



</body>
</html>