<?php
 class OperacionCadena{

    private $cadena;

    public function __construct($_cadena){
        $this->cadena = $_cadena;
    }

    public function invertir(){
        return strrev($this->cadena);
    }
    public function mayusculas(){
        return strtoupper($this->cadena);
    }
    public function minusculas(){
        return strtolower($this->cadena);
    }

 }




?>