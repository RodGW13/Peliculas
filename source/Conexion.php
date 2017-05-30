<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2014
 */
class Conexion{
    public $usuario='root';
    public $password='';
    public $basededatos='test';
    public $url='localhost';
    public $cone;
    
    public function Conexion()
    {
        $this->cone=mysql_connect($this->url,$this->usuario,$this->password);
        mysql_select_db($this->basededatos,$this->cone);
    }
    function getConexion()
    {
        return $this->cone;
    }
}


 


?>