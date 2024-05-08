<?php

// PASO1: CONECTARSE A UN SERVIDOR Y UNA BASE DE DATOS.
$conexion=mysqli_connect('localhost','root', 'root', 'sistema', '3306');

// PASO2: REALIZAR LA ACCION (INSERT, UPDATE, ETC...).
$consulta="select * from usuarios
where login='ana' && password= sha1('123')";

$resultado=mysqli_query($conexion, $consulta);

if($_POST)
{
    $usuario=$_POST['txtUsuario'];
    $contraseña=$_POST['txtContraseña'];

    if($usuario=mysql_fetch_array($resultado) && $contraseña=mysql_fetch_array($resultado))
    {
        echo"USUARIO Y CONTRASEÑA CORRECTOS";
    }
    else
    {
        echo"USUARIO O CONTRASEÑA INCORRECTOS";    
    }


}

// PASO 3: CERRAR LA CONEXION.
mysqli_close($conexion);
