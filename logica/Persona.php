<?php

class Persona{
    private $idPersona;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;

    public function getIdPersona(){
        return $this->idPersona;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getCorreo(){
        return $this->correo;
    }

    public function getClave(){
        return $this->clave;
    }

    public function setIdPersona($idPersona){
        $this->idPersona = $idPersona;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function setCorreo($correo){
        $this->correo = $correo;
    }

    public function setClave($clave){
        $this->clave = $clave;
    }
    
    public function Persona($idPersona, $nombre, $apellido, $correo, $clave){
        $this -> idPersona = $idPersona;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> correo = $correo;
        $this -> clave = $clave;
    }
    
}

?>