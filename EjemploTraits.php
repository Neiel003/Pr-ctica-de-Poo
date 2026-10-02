<?php

class Coche{
    public function getMarca(){
        return "Renault";
    }
}

trait Modelo{
    public function getModelo(){
        parent::getMarca();";
        echo 'Clio';
    }
}

class Ventas extends Coche{
    use Modelo;
}

