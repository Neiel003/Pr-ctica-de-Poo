<?php
Class Coche{
    const RUEDAS = 4;
}

Echo Coche::RUEDAS;

$miCoche = new Coche();
echo $miCoche::RUEDAS."<BR>";

?>