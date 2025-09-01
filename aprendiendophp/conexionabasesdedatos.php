<?php
    // abro la conexion con la base de datos
    $enlace = mysqli_connect("localhost","cursoaplicacionesweb","velissanchez","cursoaplicacionesweb");
    
    // le pido algo a la base de datos
    $resultado = mysqli_query($enlace,"SELECT * FROM usuarios");
    while ($fila = $resultado->fetch_assoc())  {
        echo $fila['nombre']." ".$fila['apellidos']."<br>";
    }
    
    // cierro los recursos que he abierto
    mysqli_close($enlace);
?>