<?php
    class Contacto{
        /*
            Encapsulación 
            Herencia
            Polimorfismo
        */

        // Propiedades
        private $id;
        private $nombre;
        private $apellidos;
        private $email;
        private $telefono_fijo;
        private $telefono_movil;
        private $sueldo;

        // Constructor 
        function __construct($id, $nom, $ape, $email, $fijo, $movil, $sueldo){
            $this->id = $id;
            $this->nombre = $nom;
            $this->apellidos = $ape;
            $this->email = $email;
            $this->telefono_fijo = $fijo;
            $this->telefono_movil = $movil;
            $this->sueldo = $sueldo;   
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return strtoupper($this->nombre);
        }

        /**
         * Get the value of apellidos
         */ 
        public function getApellidos()
        {
                return $this->apellidos;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Get the value of telefono_fijo
         */ 
        public function getTelefono_fijo()
        {
                return $this->telefono_fijo;
        }

        /**
         * Get the value of telefono_movil
         */ 
        public function getTelefono_movil()
        {
                return $this->telefono_movil;
        }

        /**
         * Get the value of sueldo
         */ 
        public function getSueldo()
        {
                return $this->sueldo;
        }

        public function getSueldo_Formateado()
        {
                $formato = number_format($this->sueldo, 2, ",", ".");
                return $formato;
        }

        public function __toString(){
            return $this->id . "," . $this->nombre . "," . $this->apellidos . "," . $this->email;
        }
    }