<?php

class Administrador extends Persona{
    
    private $productos;

    public function getProductos(){
        return $this->productos;
    }

    public function setProductos($productos){
        $this->productos = $productos;
    }

}

?>




