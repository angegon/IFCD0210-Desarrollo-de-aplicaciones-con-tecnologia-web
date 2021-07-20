<?php
class Compradores_MDL{
    private $comp_id;
    private $comp_nombre;
    private $comp_dni;

    function __construct($id, $nom, $dni)
    {
        $this->comp_id = $id;
        $this->comp_nombre = $nom;
        $this->comp_dni = $dni;
    }

    function getComp_id(){
        return $this->comp_id;
    }
    function getComp_nombre(){
        return $this->comp_nombre;
    }
    function getComp_dni(){
        return $this->comp_dni;
    }

}