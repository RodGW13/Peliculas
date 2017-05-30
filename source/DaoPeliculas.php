<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2014
 */
include_once("Conexion.php");
include_once("Peliculas.php");
include_once("IPeliculas.php");

class DaoPeliculas implements IPeliculas
{
    public $cone;
    public $peliculas;
    
    public function DaoPeliculas()
    {   
        $this->cone=new Conexion;
        $this->peliculas= new Peliculas;
    
    }
    
    function insertar($peliculas)
    { 
        try
        {
    
                $this->peliculas=$peliculas;
                $codigo_pel=$this->peliculas->getCodigo_pel();
                $titulo=$this->peliculas->getTitulo();
                $categoria=$this->peliculas->getCategoria();
                $precio=$this->peliculas->getPrecio();
                $asientos=$this->peliculas->getAsientos();
                $sql="insert into peliculas values('$codigo_pel','$titulo', '$categoria', $precio, $asientos)";
                $resp=mysql_query($sql,$this->cone->getConexion());
                return 1;
        
    }
        catch(exception $e)
        {
            return 0;
        }
    }
    
    function eliminar($codigo_pel)
    {
         try{
            $sql="delete from peliculas where codigo_pel='$codigo_pel'";
            $resp=mysql_query($sql,$this->cone->getConexion());
            return 1;            
        } catch(Exception $e){
        return 0;
        
    }
    }
    
    function listar()
    {
        try
        {
            $sql="select * from peliculas";
            $registro=mysql_query($sql, $this->cone->getConexion());
            $filas=null;$indice=0;
            while($reg=mysql_fetch_array($registro))
            {
                $peliculas=new Peliculas;
                $peliculas->setCodigo_pel($reg[0]);
                $peliculas->setTitulo($reg[1]);
                $peliculas->setCategoria($reg[2]);
                $peliculas->setPrecio($reg[3]);
                $peliculas->setAsientos($reg[4]);
                $filas[$indice]= $peliculas;
                $indice++;
            }
            return $filas;
        }
        catch(Exception $e)
        {
            return null;
        }
    }
    
    function buscar($codigo_pel){
        try
        {
            $sql="select * from peliculas where codigo_pel='$codigo_pel'";
            $resp=mysql_query($sql,$this->cone->getConexion());
            return 1;
        }
        catch(Exception $e)
        {
             return 0;   
        }
}
    
    function actualizar($peliculas)
    {
        try
        {
              $this->peliculas=$peliculas;
              $codigo_pel=$this->peliculas->getCodigo_pel();
              $titulo=$this->peliculas->getTitulo();
              $categoria=$this->peliculas->getCategoria();
              $precio=$this->peliculas->getPrecio();
              $asientos=$this->peliculas->getAsientos();
               $sql="UPDATE peliculas SET codigo_pel='$codigo_pel',titulo='$titulo',categoria='$categoria'precio=.$precio,asientos=$asientos WHERE codigo_pel='$codigo_pel'";
               mysql_query($sql,$this->cone->getConexion());
               
               $resp=mysql_affected_rows();
               return $resp;
               
        }
    catch(Exception $e)
    {
         return 0;   
     }    
}
    
}

?>