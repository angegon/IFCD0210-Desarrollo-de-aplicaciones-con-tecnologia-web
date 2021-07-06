<?php

    class Deportes{
        private $id;
        private $nombre;
        private $descripcion;
        private $practicantes;
        
        function __construct($id, $nom, $des){
            $this->id = $id;
            $this->nombre = $nom;
            $this->descripcion = $des;
            $this->practicantes = 0;
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
                return $this->nombre;
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Get the value of practicantes
         */ 
        public function getPracticantes()
        {
                return $this->practicantes;
        }

        /**
         * Set the value of practicantes
         *
         * @return  self
         */ 
        public function setPracticantes($practicantes)
        {
                $this->practicantes = $practicantes;

                return $this;
        }

        public function __toString(){
            return $this->id . "," . $this->nombre . "," . $this->descripcion . "," . $this->practicante;
        }
    }
?>