<?php

 class libro {

 private $autor;
 private $titulo;
 private $numeroedicion;
 private $lugar;
 private $editorial;
 private $año;
 private $numeropaginas;
 private $notas;
 private $isbn;


 //Constructor de la clase
 function __construct($autor, $titulo, $numeroedicion, $lugar, $editorial, $año, $numeropaginas, $notas, $isbn){
    $this->autor = $autor;
    $this->titulo = $titulo;
    $this->numeroedicion = $numeroedicion;
    $this->lugar = $lugar;
    $this->editorial =$editorial;
    $this->año = $año;
    $this->numeropaginas = $numeropaginas;
    $this->notas = $notas;
    $this->isbn = $isbn;
    }
   
public function getAutor(){
    return $this->autor;
}
public function getTitulo(){
    return $this->titulo;
}
public function getNumeroEdicion(){
    return $this->numeroedicion;
}
public function getLugar(){
    return $this->lugar;
}
public function getEditorial(){
    return $this->editorial;
}
public function getAño(){
    return $this->año;
}
public function getNumerosPaginas(){
    return $this->numeropaginas;
}
public function getNotas(){
    return $this->notas;
}
public function getISBN(){
    return $this->isbn;
}
 }
 
?>