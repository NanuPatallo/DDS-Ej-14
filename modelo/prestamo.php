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
        echo $this->getMontoSolicitado();
        echo '<hr>';
        echo $this->getTasaEfectivaMensual();
        echo '<hr>';
        echo $this->getCantidadCuotas();
        echo '<hr>';
        echo $this->getTasaEfectivaMensual();
    }
}
