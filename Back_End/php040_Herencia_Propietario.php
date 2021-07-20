<?php
    class Propietario extends Ciudadano {
        private $propiedad = array();

        function __construct( $nom, $ape, $dni, $prop )
        {
            $this->nombre=$nom;
            $this->apellidos=$ape;
            $this->dni = $dni;
            $this->propiedad = $prop;
        }
 
        public function getPropiedad()
        {
                return $this->propiedad;
        }
        
        function __toString()
        {
            $x = $this->nombre . " - " . $this->apellidos . " - " . $this->dni;
            foreach ($this->propiedad as $elem){
                $x .= " - " . $elem;
            }
            return $x;
        }        
    }