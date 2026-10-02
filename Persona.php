<?php

class Persona
{
    protected string $nombre;
    protected string $apellidos;
    protected string  $fechaNacimiento;

    public function __construct(
        string $nombre, 
        string $apellidos, 
        string $fechaNacimiento)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }
}