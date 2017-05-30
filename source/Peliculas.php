<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2014
 */
class Peliculas{
  public $codigo_pel;
  public $titulo;
  public $categoria;
  public $precio;
  public $asientos;
  
  public function Peliculas()
  {
    $this->codigo_pel=0; 
    $this->titulo=""; 
    $this->categoria=""; 
    $this->precio=""; 
    $this->asientos="";
     
  }
  function setCodigo_pel($codigo_pel)
  {
    $this->codigo_pel=$codigo_pel;
  }
    function setTitulo($titulo)
  {
    $this->titulo=$titulo;
  }
    function setCategoria($categoria)
  {
    $this->categoria=$categoria;
  }
    function setPrecio($precio)
  {
    $this->precio=$precio;
  }
    function setAsientos($asientos)
  {
    $this->asientos=$asientos;
  }
  
    function getCodigo_pel()
  {
    return $this->codigo_pel;
  }
    function getTitulo()
  {
    return $this->titulo;
  }
    function getCategoria()
  {
    return $this->categoria;
  }
    function getPrecio()
  {
    return $this->precio;
  }
    function getAsientos()
  {
    return $this->asientos;
  }
}

  
  


?>