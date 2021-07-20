<?php
class Automoviles_MDL{

    // Propiedades
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

    // Constructor
    function __construct($id, $mar, $mod, $col, $cil, $mat, $fcom, $icom, $fven, $iven, $obs)
    {
        $this->auto_id = $id;
        $this->auto_marca = $mar;
        $this->auto_modelo = $mod;
        $this->auto_color = $col;
        $this->auto_cilindrada = $cil;
        $this->auto_matricula = $mat;
        $this->auto_fecha_compra = $fcom;
        $this->auto_importe_compra = $icom;
        $this->auto_fecha_venta = $fven;
        $this->auto_importe_venta = $iven;
        $this->auto_observaciones = $obs;
    }
 
    //Métodos
    public function getAuto_id()
    {
        return $this->auto_id;
    }
    public function setAuto_id($auto_id)
    {
        $this->auto_id = $auto_id;
    }

    public function getAuto_marca()
    {
        return $this->auto_marca;
    }

    public function setAuto_marca($auto_marca)
    {
        $this->auto_marca = $auto_marca;

        return $this;
    }

    public function getAuto_modelo()
    {
        return $this->auto_modelo;
    }
 
    public function setAuto_modelo($auto_modelo)
    {
        $this->auto_modelo = $auto_modelo;
    }

    public function getAuto_color()
    {
        return $this->auto_color;
    }
 
    public function setAuto_color($auto_color)
    {
        $this->auto_color = $auto_color;
    }

    public function getAuto_cilindrada()
    {
        return $this->auto_cilindrada;
    }

    public function setAuto_cilindrada($auto_cilindrada)
    {
        $this->auto_cilindrada = $auto_cilindrada;
    }
    public function getAuto_matricula()
    {
        return $this->auto_matricula;
    }

    public function setAuto_matricula($auto_matricula)
    {
        $this->auto_matricula = $auto_matricula;
    }

    public function getAuto_fecha_compra()
    {
        return $this->auto_fecha_compra;
    }

    public function setAuto_fecha_compra($auto_fecha_compra)
    {
        $this->auto_fecha_compra = $auto_fecha_compra;

        return $this;
    }

    public function getAuto_importe_compra()
    {
        return $this->auto_importe_compra;
    }
    
    public function setAuto_importe_compra($auto_importe_compra)
    {
        $this->auto_importe_compra = $auto_importe_compra;
    }

    public function getAuto_fecha_venta()
    {
        return $this->auto_fecha_venta;
    }

    public function setAuto_fecha_venta($auto_fecha_venta)
    {
        $this->auto_fecha_venta = $auto_fecha_venta;
    }

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
    }

    public function getAuto_observaciones()
    {
        return $this->auto_observaciones;
    }

    public function setAuto_observaciones($auto_observaciones)
    {
        $this->auto_observaciones = $auto_observaciones;
    }

    public function __toString()
    {
        return 
                $this->auto_marca . " - " .
                $this->auto_modelo . " - " .
                $this->auto_color . " - " .
                $this->auto_matricula;
    }
}