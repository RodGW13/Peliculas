<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2014
 */
  include_once("source/Conexion.php");
$sql="select * from peliculas";
$conexion=new Conexion;
$cone=$conexion->getConexion();
mysql_select_db("test", $cone);
$registro=mysql_query($sql, $cone);
echo "<table border=1>";
while($reg=mysql_fetch_array($registro))
{
    echo"<tr>";
    echo"<td>".$reg[0]."</td>";
    echo"<td>".$reg[1]."</td>";
    echo"<td>".$reg[2]."</td>";
    echo"<td>".$reg[3]."</td>";
    echo"<td>".$reg[4]."</td>";
    echo"</tr>";
}
echo "</table>";



?>