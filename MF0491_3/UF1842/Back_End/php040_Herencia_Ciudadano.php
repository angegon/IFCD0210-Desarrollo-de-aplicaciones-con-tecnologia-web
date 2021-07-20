<?php
    class Ciudadano extends Persona {
        private $dni;

        function __construct( $nom, $ape,  $dni )
        {
            $this->nombre=$nom;
            $this->apellidos=$ape;
            $this->dni = $dni;
        }
 
        public function getDni()
        {
            return $this->dni;
        }
        function __toString()
        {
            return $this->nombre . " - " . $this->apellidos . " - " . $this->dni;
        }
    }