<?php

class Partido{
    private $idPartido;
    private $fecha;
    private $cantGolesE1;
    private $cantGolesE2;
    private $equipo1;
    private $equipo2;

    public function __construct($idPartido, $fecha, $cantGolesE1, $cantGolesE2, $equipo1, $equipo2){
        $this->idPartido = $idPartido;
        $this->fecha = $fecha;
        $this->cantGolesE1 = $cantGolesE1;
        $this->cantGolesE2 = $cantGolesE2;
        $this->equipo1 = $equipo1;
        $this->equipo2 = $equipo2;
    }

    public function getIdPartido()
    {
        return $this->idPartido;
    }

    public function setIdPartido($idPartido)
    {
        $this->idPartido = $idPartido;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getCantGolesE1()
    {
        return $this->cantGolesE1;
    }

    public function setCantGolesE1($cantGolesE1)
    {
        $this->cantGolesE1 = $cantGolesE1;
    }

    public function getCantGolesE2()
    {
        return $this->cantGolesE2;
    }

    public function setCantGolesE2($cantGolesE2)
    {
        $this->cantGolesE2 = $cantGolesE2;
    }

    public function getEquipo1()
    {
        return $this->equipo1;
    }

    public function setEquipo1($equipo1)
    {
        $this->equipo1 = $equipo1;
    }

    public function getEquipo2()
    {
        return $this->equipo2;
    }

    public function setEquipo2($equipo2)
    {
        $this->equipo2 = $equipo2;
    }

    public function __toString(){
        
    }

    public function darEquipoGanador(){

        $golesEquipo1 = $this->getCantGolesE1();
        $golesEquipo2 = $this->getCantGolesE2();
        $equipoGanador = null;
        if ($golesEquipo1 > $golesEquipo2) {
            $equipoGanador = $this->getEquipo1();
        } elseif ($golesEquipo2 > $golesEquipo1) {
            $equipoGanador = $this->getEquipo2();
        } else{
            $equipoGanador = $this->getEquipo1()."".$this->getEquipo2();
        }
        return $equipoGanador;
    }

    public function coeficiente(){

        $cantidadJugadores = $this->getEquipo1()->getCantJugadores() + $this->getEquipo2()->getCantJugadores();
        $coef = 0.5*($this->getCantGolesE1()+$this->getCantGolesE2())*$cantidadJugadores;
        return $coef;
    }

}