<?php

    class Preguntas_MDL{
        private $preg_id; 
        private $preg_pregunta; 
        private $preg_respuesta_1; 
        private $preg_respuesta_2; 
        private $preg_respuesta_3; 
        private $preg_respuesta_4; 
        private $preg_tem_tema_id; 
        private $preg_respuesta_buena;

        function __construct($id, $pregunta, $respuesta_1, $respuesta_2, $respuesta_3, $respuesta_4, $tema_id, $respuesta_buena ){
            $this->preg_id = $id;
            $this->preg_pregunta = $pregunta; 
            $this->preg_respuesta_1 = $respuesta_1; 
            $this->preg_respuesta_2 = $respuesta_2; 
            $this->preg_respuesta_3 = $respuesta_3; 
            $this->preg_respuesta_4 = $respuesta_4; 
            $this->preg_tem_tema_id = $tema_id; 
            $this->preg_respuesta_buena = $respuesta_buena;  
        }                

        /**
         * Get the value of preg_id
         */ 
        public function getPreg_id()
        {
                return $this->preg_id;
        }

        /**
         * Set the value of preg_id
         *
         * @return  self
         */ 
        public function setPreg_id($preg_id)
        {
                $this->preg_id = $preg_id;

                return $this;
        }

        /**
         * Get the value of preg_pregunta
         */ 
        public function getPreg_pregunta()
        {
                return $this->preg_pregunta;
        }

        /**
         * Set the value of preg_pregunta
         *
         * @return  self
         */ 
        public function setPreg_pregunta($preg_pregunta)
        {
                $this->preg_pregunta = $preg_pregunta;

                return $this;
        }

        /**
         * Get the value of preg_respuesta_1
         */ 
        public function getPreg_respuesta_1()
        {
                return $this->preg_respuesta_1;
        }

        /**
         * Set the value of preg_respuesta_1
         *
         * @return  self
         */ 
        public function setPreg_respuesta_1($preg_respuesta_1)
        {
                $this->preg_respuesta_1 = $preg_respuesta_1;

                return $this;
        }

        /**
         * Get the value of preg_respuesta_2
         */ 
        public function getPreg_respuesta_2()
        {
                return $this->preg_respuesta_2;
        }

        /**
         * Set the value of preg_respuesta_2
         *
         * @return  self
         */ 
        public function setPreg_respuesta_2($preg_respuesta_2)
        {
                $this->preg_respuesta_2 = $preg_respuesta_2;

                return $this;
        }

        /**
         * Get the value of preg_respuesta_3
         */ 
        public function getPreg_respuesta_3()
        {
                return $this->preg_respuesta_3;
        }

        /**
         * Set the value of preg_respuesta_3
         *
         * @return  self
         */ 
        public function setPreg_respuesta_3($preg_respuesta_3)
        {
                $this->preg_respuesta_3 = $preg_respuesta_3;

                return $this;
        }

        /**
         * Get the value of preg_respuesta_4
         */ 
        public function getPreg_respuesta_4()
        {
                return $this->preg_respuesta_4;
        }

        /**
         * Set the value of preg_respuesta_4
         *
         * @return  self
         */ 
        public function setPreg_respuesta_4($preg_respuesta_4)
        {
                $this->preg_respuesta_4 = $preg_respuesta_4;

                return $this;
        }

        /**
         * Get the value of preg_tem_tema_id
         */ 
        public function getPreg_tem_tema_id()
        {
                return $this->preg_tem_tema_id;
        }

        /**
         * Set the value of preg_tem_tema_id
         *
         * @return  self
         */ 
        public function setPreg_tem_tema_id($preg_tem_tema_id)
        {
                $this->preg_tem_tema_id = $preg_tem_tema_id;

                return $this;
        }

        /**
         * Get the value of preg_respuesta_buena
         */ 
        public function getPreg_respuesta_buena()
        {
                return $this->preg_respuesta_buena;
        }

        /**
         * Set the value of preg_respuesta_buena
         *
         * @return  self
         */ 
        public function setPreg_respuesta_buena($preg_respuesta_buena)
        {
                $this->preg_respuesta_buena = $preg_respuesta_buena;

                return $this;
        }
    }


?>