<?php

    class Automovil_MDL{
        private $auto_id; 
        private $auto_marca; 
        private $auto_modelo; 
        private $auto_color; 
        private $auto_cilindrada; 
        private $auto_matricula; 
        private $auto_fecha_compra; 
        private $auto_importe_compra; 
        private $auto_fecha_venta; 
        private $auto_importe_venta; 
        private $auto_observaciones;


        function __construct($id, $marca, $modelo, $color, $cilindrada, $matricula, $fecha_compra, $importe_compra, $fecha_venta, $importe_venta, $observaciones){
            $this->auto_id = $id; 
            $this->auto_marca = $marca; 
            $this->auto_modelo = $modelo; 
            $this->auto_color = $color; 
            $this->auto_cilindrada = $cilindrada; 
            $this->auto_matricula = $matricula; 
            $this->auto_fecha_compra = $fecha_compra; 
            $this->auto_importe_compra = $importe_compra; 
            $this->auto_fecha_venta = $fecha_venta; 
            $this->auto_importe_venta = $importe_venta; 
            $this->auto_observaciones = $observaciones;
        }

        

        /**
         * Get the value of auto_importe_venta
         */ 
        public function getAuto_importe_venta()
        {
                return $this->auto_importe_venta;
        }

        /**
         * Set the value of auto_importe_venta
         *
         * @return  self
         */ 
        public function setAuto_importe_venta($auto_importe_venta)
        {
                $this->auto_importe_venta = $auto_importe_venta;

                return $this;
        }

        /**
         * Get the value of auto_observaciones
         */ 
        public function getAuto_observaciones()
        {
                return $this->auto_observaciones;
        }

        /**
         * Set the value of auto_observaciones
         *
         * @return  self
         */ 
        public function setAuto_observaciones($auto_observaciones)
        {
                $this->auto_observaciones = $auto_observaciones;

                return $this;
        }

        /**
         * Get the value of auto_fecha_venta
         */ 
        public function getAuto_fecha_venta()
        {
                return $this->auto_fecha_venta;
        }

        /**
         * Set the value of auto_fecha_venta
         *
         * @return  self
         */ 
        public function setAuto_fecha_venta($auto_fecha_venta)
        {
                $this->auto_fecha_venta = $auto_fecha_venta;

                return $this;
        }

        /**
         * Get the value of auto_importe_compra
         */ 
        public function getAuto_importe_compra()
        {
                return $this->auto_importe_compra;
        }

        /**
         * Set the value of auto_importe_compra
         *
         * @return  self
         */ 
        public function setAuto_importe_compra($auto_importe_compra)
        {
                $this->auto_importe_compra = $auto_importe_compra;

                return $this;
        }

        /**
         * Get the value of auto_fecha_compra
         */ 
        public function getAuto_fecha_compra()
        {
                return $this->auto_fecha_compra;
        }

        /**
         * Set the value of auto_fecha_compra
         *
         * @return  self
         */ 
        public function setAuto_fecha_compra($auto_fecha_compra)
        {
                $this->auto_fecha_compra = $auto_fecha_compra;

                return $this;
        }

        /**
         * Get the value of auto_matricula
         */ 
        public function getAuto_matricula()
        {
                return $this->auto_matricula;
        }

        /**
         * Set the value of auto_matricula
         *
         * @return  self
         */ 
        public function setAuto_matricula($auto_matricula)
        {
                $this->auto_matricula = $auto_matricula;

                return $this;
        }

        /**
         * Get the value of auto_cilindrada
         */ 
        public function getAuto_cilindrada()
        {
                return $this->auto_cilindrada;
        }

        /**
         * Set the value of auto_cilindrada
         *
         * @return  self
         */ 
        public function setAuto_cilindrada($auto_cilindrada)
        {
                $this->auto_cilindrada = $auto_cilindrada;

                return $this;
        }

        /**
         * Get the value of auto_color
         */ 
        public function getAuto_color()
        {
                return $this->auto_color;
        }

        /**
         * Set the value of auto_color
         *
         * @return  self
         */ 
        public function setAuto_color($auto_color)
        {
                $this->auto_color = $auto_color;

                return $this;
        }

        /**
         * Get the value of auto_modelo
         */ 
        public function getAuto_modelo()
        {
                return $this->auto_modelo;
        }

        /**
         * Set the value of auto_modelo
         *
         * @return  self
         */ 
        public function setAuto_modelo($auto_modelo)
        {
                $this->auto_modelo = $auto_modelo;

                return $this;
        }

        /**
         * Get the value of auto_marca
         */ 
        public function getAuto_marca()
        {
                return $this->auto_marca;
        }

        /**
         * Set the value of auto_marca
         *
         * @return  self
         */ 
        public function setAuto_marca($auto_marca)
        {
                $this->auto_marca = $auto_marca;

                return $this;
        }

        /**
         * Get the value of auto_id
         */ 
        public function getAuto_id()
        {
                return $this->auto_id;
        }

        /**
         * Set the value of auto_id
         *
         * @return  self
         */ 
        public function setAuto_id($auto_id)
        {
                $this->auto_id = $auto_id;

                return $this;
        }
    }

?>