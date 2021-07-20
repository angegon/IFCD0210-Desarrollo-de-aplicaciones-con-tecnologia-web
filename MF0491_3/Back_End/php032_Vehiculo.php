<?php
    class Vehiculo {
        // Reglas a cumplir en la orientación a objetos:
        // Encapsulación: Propiedades privadas
        // Herencia: 
        // Polimorfismo: 

        // Propiedades de la clase
        // Pueden ser "public" accesibles por los elementos externos a la clase
        // "private" solo son accesibles por los métodos de la clase
        // "protected" los métodos de la clase y sus hijos pueden acceder
        private $matricula;
        private $marca;
        private $modelo;
        private $color;
        private $cilindrada;

        // Constructor (método que inicializa las propiedades),
        // se llama siempre __construct, se ejecuta cuando instancia el objeto
        function __construct($marc, $mod, $col, $cilin){
            $this->matricula = "";
            $this->marca = $marc;
            $this->modelo = $mod;
            $this->color = $col;
            $this->cilindrada = $cilin;
        }

        // Getter y setters, para acceder a las propiedades desde fuera de la clase
        // Getter devuelve una propiedad y setter la setea

        /**
         * Get the value of matricula
         */ 
        public function getMatricula()
        {
                return $this->matricula;
        }

        /**
         * Set the value of matricula
         *
         * @return  self
         */ 
        public function setMatricula($matricula)
        {
                $this->matricula = $matricula;
        }

        /**
         * Get the value of marca
         */ 
        public function getMarca()
        {
                return $this->marca;
        }

        /**
         * Set the value of marca
         *
         * @return  self
         */ 
        public function setMarca($marca)
        {
                $this->marca = $marca;
        }

        /**
         * Get the value of modelo
         */ 
        public function getModelo()
        {
                return $this->modelo;
        }

        /**
         * Set the value of modelo
         *
         * @return  self
         */ 
        public function setModelo($modelo)
        {
                $this->modelo = $modelo;
        }

        /**
         * Get the value of color
         */ 
        public function getColor()
        {
                return $this->color;
        }

        /**
         * Set the value of color
         *
         * @return  self
         */ 
        public function setColor($color)
        {
                $this->color = $color;
        }

        /**
         * Get the value of cilindrada
         */ 
        public function getCilindrada()
        {
                return $this->cilindrada;
        }

        /**
         * Set the value of cilindrada
         *
         * @return  self
         */ 
        public function setCilindrada($cilindrada)
        {
                $this->cilindrada = $cilindrada;

        }
    }
?>