<?php
    class Productos_MDL{
        private $prod_codigo;
        private $prod_seccion;
        private $prod_nombre;
        private $prod_precio;
        private $prod_fecha;
        private $prod_importado;
        private $prod_pais_origen;
        private $prod_foto;
    
        function __construct($codigo, $seccion, $nombre, $precio, $fecha, $importado, $pais_origen, $foto){
            $this->prod_codigo = $codigo;
            $this->prod_seccion = $seccion;
            $this->prod_nombre = $nombre;
            $this->prod_precio = $precio;
            $this->prod_fecha = $fecha;
            $this->prod_importado = $importado;
            $this->prod_pais_origen = $pais_origen;
            $this->prod_foto =  $foto;
        }





        /**
         * Get the value of prod_codigo
         */ 
        public function getProd_codigo()
        {
                return $this->prod_codigo;
        }

        /**
         * Set the value of prod_codigo
         *
         * @return  self
         */ 
        public function setProd_codigo($prod_codigo)
        {
                $this->prod_codigo = $prod_codigo;

                return $this;
        }
    }
?>