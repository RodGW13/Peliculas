<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2014
 */

include_once("source/DaoPeliculas.php");
$codigo_pel=$_POST["codigo_pel"];

$daopeliculas=new DaoPeliculas;
$resp=$daopeliculas->eliminar($codigo_pel);
if($resp==1)
{
    echo "Eliminado";
}
else
{
    echo "No grabo";
}

?>