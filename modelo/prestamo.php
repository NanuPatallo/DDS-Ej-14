<?php

class Prestamo
{
    private $montoSolicitado;
    private $tasaEfectivaMensual;
    private $cantidadCuotas;
    private $costoFinancieroTotal;

    public function getMontoSolicitado()
    {
        return $this->montoSolicitado;
    }
    public function setMontoSolicitado($montoSolicitado)
    {
        $this->montoSolicitado = $montoSolicitado;
    }



    public function getTasaEfectivaMensual()
    {
        return $this->tasaEfectivaMensual;
    }

    public function setTasaEfectivaMensual($tasaEfectivaMensual)
    {
        $this->tasaEfectivaMensual = $tasaEfectivaMensual;
    }



    public function getCantidadCuotas()
    {
        return $this->cantidadCuotas;
    }
    public function setCantidadCuotas($cantidadCuotas)
    {
        $this->cantidadCuotas = $cantidadCuotas;
    }



    public function getCostoFinancieroTotal()
    {
        return $this->costoFinancieroTotal;
    }
    public function setCostoFinancieroTotal($costoFinancieroTotal)
    {
        $this->costoFinancieroTotal = $costoFinancieroTotal;
    }


    public function MostrarDatos()
    {
        echo $this->montoSolicitado;
        echo '<hr>';
        echo $this->tasaEfectivaMensual;
        echo '<hr>';
        echo $this->cantidadCuotas;
        echo '<hr>';
        echo $this->costoFinancieroTotal;
    }
}
