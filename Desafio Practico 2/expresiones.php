<?php
function autor($autor){
    $patron = '/^\w+,(.*)\s/';
 $verificado = preg_match($patron, $autor);
 if($verificado==true){
    return $autor;
 }
 else{
    echo "<script type=\"text/javascript\">alert('El autor ingresado no coincide con el dato requerido');</script>";
}
}
function titulo($titulo){
    $patron = "/^[A-Za-z][A-Za-z\s]+$/";
 $verificado = preg_match($patron, $titulo);
 if($verificado==true){
    return $titulo;
 }
 else{
    echo "<script type=\"text/javascript\">alert('El titulo ingresado no coincide con el dato requerido');</script>";
}
}
function lugar($lugar){
    $patron = "/^[A-Za-z][A-Za-z\s]+$/";
 $verificado = preg_match($patron, $lugar);
 if($verificado==true){
    return $lugar;
 }
 else{
    echo "<script type=\"text/javascript\">alert('El lugar ingresado no coincide con el dato requerido');</script>";
}
}
function editorial($editorial){
    $patron = "/^[A-Za-z][A-Za-z\s]+$/";
 $verificado = preg_match($patron, $editorial);
 if($verificado==true){
    return $editorial;
 }
 else{
    echo "<script type=\"text/javascript\">alert('La editorial ingresado no coincide con el dato requerido');</script>";
}
}
function año($año){
    $patron = '/\\((19[5-9][0-9]|20[0-9][0-9])\\)/';
 $verificado = preg_match($patron, $año);
 if($verificado==true){
    return $año;
 }
 else{
    echo "<script type=\"text/javascript\">alert('El año ingresado no coincide con el dato requerido');</script>";
}
}

function isbn($isbn){
    $patron = '/^\d{4}+(?:-\d{5})+(?:-\d{3})+(?:-\d{1})+$/';
 $verificado = preg_match($patron, $isbn);
 if($verificado==true){
    return $isbn;
 }
 else{
    echo "<script type=\"text/javascript\">alert('El isbn ingresado no coincide con el dato requerido XXXX-XXXXX-XXX-X');</script>";
}
}




?>