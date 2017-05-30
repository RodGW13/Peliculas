<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2014
 */
include_once("source/Peliculas.php");
include_once("source/DaoPeliculas.php");
$codigo_pel=$_POST["codigo_pel"];
$titulo=$_POST["titulo"];
$categoria=$_POST["categoria"];
$precio=$_POST["precio"];
$asientos=$_POST["asientos"];

$peliculas=new Peliculas;
$daoPeliculas=new DaoPeliculas;

$peliculas->setCodigo_pel($codigo_pel);
$peliculas->setTitulo($titulo);
$peliculas->setCategoria($categoria);
$peliculas->setPrecio($precio);
$peliculas->setAsientos($asientos);

$resp=$daoPeliculas->insertar($peliculas);

if($resp==1)
{
    echo "Grabado";
}
else
{
    echo "No grabo";
}

?>