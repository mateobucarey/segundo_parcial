<?php

class Torneo{
    private $colPartidos;
    private $importe;

    public function __construct($colPartidos, $importe){
        $this->colPartidos = $colPartidos;
        $this->importe = $importe;
    }

    public function getColPartidos()
    {
        return $this->colPartidos;
    }

    public function setColPartidos($colPartidos)
    {
        $this->colPartidos = $colPartidos;
    }

    public function getImporte()
    {
        return $this->importe;
    }

    public function setImporte($importe)
    {
        $this->importe = $importe;
    }

    public function __toString(){
        
    }

    public function ingresarPartido($OBJEquipo1, $OBJEquipo2, $fecha, $tipoPartido){

        $tipoPartido = strtoupper($tipoPartido);
        $partido = null;

        if ($OBJEquipo1->getObjCategoria()->getDescripcion() == $OBJEquipo2->getObjCategoria()->getDescripcion() && $OBJEquipo1->getCantJugadores() == $OBJEquipo2->getCantJugadores()) {
            if ($tipoPartido == "FUTBOL") {
                $idPartido = count($this->getColPartidos());
                $partido = new Futbol($idPartido, $fecha, 0,0, $OBJEquipo1, $OBJEquipo2);
                $partidos = $this->getColPartidos();
                array_push($partidos, $partido);
                $this->setColPartidos($partidos);
            } else {
                $idPartido = count($this->getColPartidos());
                $partido = new Basquetbol($idPartido, $fecha, 0, 0, $OBJEquipo1, $OBJEquipo2, 0);
                $partidos = $this->getColPartidos();
                array_push($partidos, $partido);
                $this->setColPartidos($partidos);
            }
        }
        return $partido;
    }

    

    
}