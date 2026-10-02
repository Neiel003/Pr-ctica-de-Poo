<?php
include("Persona.php");

class Estudiante extends Persona
{
    protected float $indiceAcademico;
    protected int $cohorte;
    protected int $estadoAcademico;
    protected int $modalidadEstudio;

    public function __construct(
        float $indiceAcademico,
        int $cohorte,
        int $estadoAcademico,
        int $modalidadEstudio,
        string $nombre,
        string $apellido,
        string $fechaNacimiento)
    {
        parent::__construct($nombre, $apellido, $fechaNacimiento);
        $this->indiceAcademico = $indiceAcademico;
        $this->cohorte = $cohorte;
        $this->estadoAcademico = $estadoAcademico;
        $this->modalidadEstudio = $modalidadEstudio;
    }

    public function getIndiceAcademico(): float
    {
        return $this->indiceAcademico;
    }
    public function getCohorte(): int
    {
        return $this->cohorte;
    }
    public function getEstadoAcademico(): int
    {
        return $this->estadoAcademico;
    }
    public function getModalidadEstudio(): int
    {
        return $this->modalidadEstudio;
    }
}
$miEstudiante = new Estudiante(
    3.5, 
    2023, 
    1, 
    2, 
    "Juan", 
    "Pérez", 
    "2000-01-01"
);
echo "El nombre del estudiante es: " . $miEstudiante->getNombre() . "<br>";
echo "El apellido del estudiante es: " . $miEstudiante->getApellidos() . "<br>";
echo "El índice académico del estudiante es: " . $miEstudiante->getIndiceAcademico() . "<br>";
echo "El cohorte del estudiante es: " . $miEstudiante->getCohorte() . "<br>";
echo "El estado académico del estudiante es: " . $miEstudiante->getEstadoAcademico() . "<br>";
echo "La modalidad de estudio del estudiante es: " . $miEstudiante->getModalidadEstudio() . "<br>";