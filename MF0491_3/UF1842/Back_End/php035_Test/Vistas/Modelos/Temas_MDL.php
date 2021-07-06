<?php

    class Temas_MDL{
        private $tem_id;
        private $tem_tema;

        function __construct($id, $tema){
            $this->tem_id = $id;
            $this->tem_tema = $tema;
        }

        /**
         * Get the value of tem_id
         */ 
        public function getTem_id()
        {
                return $this->tem_id;
        }

        /**
         * Set the value of tem_id
         *
         * @return  self
         */ 
        public function setTem_id($tem_id)
        {
                $this->tem_id = $tem_id;

                return $this;
        }

        /**
         * Get the value of tem_tema
         */ 
        public function getTem_tema()
        {
                return $this->tem_tema;
        }

        /**
         * Set the value of tem_tema
         *
         * @return  self
         */ 
        public function setTem_tema($tem_tema)
        {
                $this->tem_tema = $tem_tema;

                return $this;
        }
    }
?>