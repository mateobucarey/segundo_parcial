<?php

class Futbol extends Partido{
    
    public function __construct($idPartido, $fecha, $cantGolesE1, $cantGolesE2, $equipo1, $equipo2){
        parent::__construct($idPartido, $fecha, $cantGolesE1, $cantGolesE2, $equipo1, $equipo2);
    }

    public function __toString(){
        
    }

    public function coeficiente(){
        
    }

    
}