<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2014
 */

include_once("source/DaoPeliculas.php");
include_once("source/Peliculas.php");

$codigo_pel=$_POST["codigo_pel"];
$titulo=$_POST["titulo"];
$categoria=$_POST["categoria"];
$precio=$_POST["precio"];
$asientos=$_POST["asientos"];
$daopeliculas=new DaoPeliculas;
$peliculas=new Peliculas;

$peliculas->setCodigo_pel($codigo_pel);
$peliculas->setTitulo($titulo);
$peliculas->setCategoria($categoria);
$peliculas->setPrecio($precio);
$peliculas->setAsientos($asientos);

$resp=$daopeliculas->actualizar($peliculas);
if($resp>0)
{
    echo "Modificado";
}
else{
    echo"No ha sido modificado";
}

//testeo
//$cone= mysql_connect("localhost", "root", "");
//mysql_select_db("test", $cone);
//$registro=mysql_query($sql, $cone);
//echo "<table border=1>";
//while($reg=mysql_fetch_array($registro))
//{
//    echo"<tr>";
//    echo"<td>".$reg[0]."</td>";
//    echo"<td>".$reg[1]."</td>";
//    echo"<td>".$reg[2]."</td>";
//    echo"<td>".$reg[3]."</td>";
//    echo"<td>".$reg[4]."</td>";
//    echo"</tr>";
//}
//echo "</table>";










?>