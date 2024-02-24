<?php


   $a=array();
$n=rand(1, 1000);
$suma=0;
$x=0;
$y=0;
$z=0;



for($i=1; $i<=$n; $i++) #ciclo para llenar
{
    array_push($a, rand(1, 10));
}
echo "Calificaciones: " . $n . "<br>";
for($i=0; $i<$n; $i++) #ciclo para imprimir
{
    echo $a [$i] . " ";
    
    if(($i+1)%30==0){echo "<br>";}
    if($a[$i]>=6)
    {
        $x++;
    }
    if($a[$i]<6)
    {
        $y++;
    }

        $suma += $a[$i];
        $promedio=$suma/$n;
        $can= round($promedio, 2) ;
        


    if($a[$i]>=$can)
    {
        $z++;
    }
        
}
$porce=$x/$n;
$porce1=$porce*100;

$porce2=$y/$n;
$porce3=$porce2*100;

echo "<br>";
echo "<br>";
echo "PROMEDIO: ", round($promedio, 2), "<br>" ;
echo "<br>";

echo "ALUMNOS CON CALIFICACIONES MAYORES AL PROMEDIO:", $z, "<br>";
echo "<br>";

echo "ALUMNOS APROBADOS: ", $x, "<br>";
echo "PORCENTAJE: ", round($porce1, 0), "% <br>";
echo "<br>";

echo "ALUMNOS REPROBADOS: ", $y, "<br>";
echo "PORCENTAJE: ", round($porce3, 0), "% <br>";
echo "<br>";


  ?>
