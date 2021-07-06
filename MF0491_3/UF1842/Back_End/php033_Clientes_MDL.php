<?php

    class Clientes_MDL{
        // Propiedades (variables)
        private $cli_codigo;
        private $cli_empresa;
        private $cli_direccion;
        private $cli_poblacion;
        private $cli_telefono;
        private $cli_responsable;
        private $cli_historial;

        // Constructor (es)
        function __construct($cod, $emp, $dir, $pob, $tel, $resp, $his){
            $this->cli_codigo = $cod;
            $this->cli_empresa = $emp;
            $this->cli_direccion = $dir;
            $this->cli_poblacion = $pob;
            $this->cli_telefono = $tel;
            $this->cli_responsable = $resp;
            $this->cli_historial = $his;
        }


        /**
         * Get the value of cli_codigo
         */ 
        public function getCli_codigo()
        {
                return $this->cli_codigo;
        }

        /**
         * Set the value of cli_codigo
         *
         * @return  self
         */ 
        public function setCli_codigo($cli_codigo)
        {
                $this->cli_codigo = $cli_codigo;

                return $this;
        }

        /**
         * Get the value of cli_empresa
         */ 
        public function getCli_empresa()
        {
                return $this->cli_empresa;
        }

        /**
         * Set the value of cli_empresa
         *
         * @return  self
         */ 
        public function setCli_empresa($cli_empresa)
        {
                $this->cli_empresa = $cli_empresa;

                return $this;
        }

        /**
         * Get the value of cli_direccion
         */ 
        public function getCli_direccion()
        {
                return $this->cli_direccion;
        }

        /**
         * Set the value of cli_direccion
         *
         * @return  self
         */ 
        public function setCli_direccion($cli_direccion)
        {
                $this->cli_direccion = $cli_direccion;

                return $this;
        }

        /**
         * Get the value of cli_poblacion
         */ 
        public function getCli_poblacion()
        {
                return $this->cli_poblacion;
        }

        /**
         * Set the value of cli_poblacion
         *
         * @return  self
         */ 
        public function setCli_poblacion($cli_poblacion)
        {
                $this->cli_poblacion = $cli_poblacion;

                return $this;
        }

        /**
         * Get the value of cli_telefono
         */ 
        public function getCli_telefono()
        {
                return $this->cli_telefono;
        }

        /**
         * Set the value of cli_telefono
         *
         * @return  self
         */ 
        public function setCli_telefono($cli_telefono)
        {
                $this->cli_telefono = $cli_telefono;

                return $this;
        }

        /**
         * Get the value of cli_responsable
         */ 
        public function getCli_responsable()
        {
                return $this->cli_responsable;
        }

        /**
         * Set the value of cli_responsable
         *
         * @return  self
         */ 
        public function setCli_responsable($cli_responsable)
        {
                $this->cli_responsable = $cli_responsable;

                return $this;
        }

        /**
         * Get the value of cli_historial
         */ 
        public function getCli_historial()
        {
                return $this->cli_historial;
        }

        /**
         * Set the value of cli_historial
         *
         * @return  self
         */ 
        public function setCli_historial($cli_historial)
        {
                $this->cli_historial = $cli_historial;

                return $this;
        }
    }
?>