<?php

class Basquetbol extends Partido{
    
    private $infraccion;

    public function __construct($idPartido, $fecha, $cantGolesE1, $cantGolesE2, $equipo1, $equipo2, $infraccion){
        parent::__construct($idPartido, $fecha, $cantGolesE1, $cantGolesE2, $equipo1, $equipo2);
        $this->infraccion = $infraccion;
    }

    public function getInfraccion()
    {
        return $this->infraccion;
    }

    public function setInfraccion($infraccion)
    {
        $this->infraccion = $infraccion;
    }

    public function __toString(){
        
    }

    public function coeficiente(){
        $coeficienteBase = parent::coeficiente();
        $coeficiente = $coeficienteBase - (0.75*$this->getInfraccion());
        return $coeficiente;
    }
}