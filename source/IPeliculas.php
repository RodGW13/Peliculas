<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2014
 */
interface IPeliculas
{
    function insertar($peliculas);
    function eliminar($codigo_pel);
    function listar();
    function buscar($codigo_pel);
    function actualizar($peliculas);
    
}


?>