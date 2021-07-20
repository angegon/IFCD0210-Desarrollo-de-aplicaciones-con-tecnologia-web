<?php
class Persona{
    // Propiedades
    protected $nombre;
    protected $apellidos;
    // Constructor
    function __construct( $nom, $ape ){
        $this->nombre = $nom;
        $this->apellidos = $ape;
    }
    //Métodos
    
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    
    public function __toString()
    {
        return $this->nombre . " - " . $this->apellidos;
    }
}
    