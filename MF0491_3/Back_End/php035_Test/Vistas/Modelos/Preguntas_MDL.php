<?php
class Preguntas_MDL
{
    // Propiedades
    private $preg_id;
    private $preg_pregunta;
    private $preg_respuesta_1;
    private $preg_respuesta_2;
    private $preg_respuesta_3;
    private $preg_respuesta_4;
    private $preg_tem_tema_id;
    private $preg_respuesta_buena;
    private $preg_utilizada;

    // Constructor
    function __construct($id, $preg, $r1, $r2, $r3,  $r4, $tema_id, $resp_buena, $utilizada)
    {
        $this->preg_id = $id;
        $this->preg_pregunta = $preg;
        $this->preg_respuesta_1 = $r1;
        $this->preg_respuesta_2 = $r2;
        $this->preg_respuesta_3 = $r3;
        $this->preg_respuesta_4 = $r4;
        $this->preg_tem_tema_id = $tema_id;
        $this->preg_respuesta_buena = $resp_buena;
        $this->preg_utilizada = $utilizada;
    }
    
    // Métodos

    public function getPreg_id()
    {
        return $this->preg_id;
    }

    public function getPreg_respuesta_4()
    {
        return $this->preg_respuesta_4;
    }

    public function getPreg_pregunta()
    {
        return $this->preg_pregunta;
    }

    public function getPreg_respuesta_1()
    {
        return $this->preg_respuesta_1;
    }

    public function getPreg_respuesta_2()
    {
        return $this->preg_respuesta_2;
    }

    public function getPreg_respuesta_3()
    {
        return $this->preg_respuesta_3;
    }

    public function getPreg_tem_tema_id()
    {
        return $this->preg_tem_tema_id;
    }

    public function getPreg_respuesta_buena()
    {
        return $this->preg_respuesta_buena;
    }

    /**
     * Get the value of preg_utilizada
     */ 
    public function getPreg_utilizada()
    {
        return $this->preg_utilizada;
    }
}
