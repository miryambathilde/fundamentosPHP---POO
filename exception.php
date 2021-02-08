<?php
$edad = 20;
function mayorEdad($edad){
    if($edad <18){
        throw new Exception ("No estás autorizado a pasar");
    }
    return true;//si devuelve true, es igual o mayor a 18 
}
try{
    mayorEdad($edad);
    echo 'Bienvenido';
}
 catch (Exception $e){//$e = error
     echo $e->getMessage(); //mostrará el mensaje
}