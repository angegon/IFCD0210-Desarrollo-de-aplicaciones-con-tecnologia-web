<?php
class Temas_MDL{
    // Propiedades
    private $tem_id;
    private $tem_tema;
    // Constructor
    function __construct( $id, $tema)
    {
        $this->tem_id = $id;
        $this->tem_tema = $tema;
    }
    // Métodos 
    public function getTem_tema()
    {
        return $this->tem_tema;
    }
 
    public function getTem_id()
    {
        return $this->tem_id;
    }
}