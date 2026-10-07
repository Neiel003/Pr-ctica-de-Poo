# Universidad Tecnológica de Panamá
## Facultad de Ingeniería de Sistemas Computacionales

**Fecha de Ejecución:**  
 02 de octubre de 2026

# Objetivos

- Comprender los conceptos fundamentales de la Programación Orientada a Objetos (POO) utilizando PHP.
- Aplicar conceptos como clases, objetos, herencia, encapsulamiento, métodos y propiedades.
- Comprender el funcionamiento de los modificadores de acceso `public`, `protected` y `private`.
- Implementar constructores y métodos para trabajar con atributos de diferentes clases.
- Comprender el uso de `static`, `self`, constantes, `final` y `traits` en PHP.
- Identificar las dificultades encontradas durante la ejecución de los ejercicios y las soluciones aplicadas.

# Introducción

PHP permite trabajar con el paradigma de Programación Orientada a Objetos (POO), facilitando la creación de aplicaciones mediante clases y objetos. Este paradigma permite organizar el código de una manera más estructurada, reutilizable y fácil de mantener.

En este laboratorio se realizaron diferentes ejercicios utilizando PHP para comprender los principales conceptos relacionados con la Programación Orientada a Objetos. Se trabajó con clases, atributos, métodos, constructores, herencia, encapsulamiento, constantes, métodos estáticos, clases finales y traits.

A través de estos ejercicios se pudo observar cómo las clases pueden compartir características mediante la herencia, cómo se pueden proteger los atributos utilizando modificadores de acceso y cómo se pueden reutilizar funcionalidades mediante diferentes mecanismos proporcionados por PHP.

# Requisitos Previos

Para realizar los ejercicios fue necesario contar con el siguiente entorno:

### Tecnologías utilizadas

- 🐘 PHP
- 🌐 Servidor web Apache
- 💻 XAMPP / WampServer
- 📝 Visual Studio Code
- 🖥️ Sistema Operativo Windows 10 / 11

# Conceptos utilizados

Durante el laboratorio se trabajaron los siguientes conceptos:

- Clases y objetos.
- Constructores.
- Encapsulamiento.
- Modificadores de acceso.
- Herencia.
- Métodos `get` y `set`.
- `parent`.
- `self`.
- Métodos y propiedades `static`.
- Constantes de clase.
- `final`.
- `traits`.
- Tipado de propiedades y métodos.
- Uso de `M_PI` para operaciones matemáticas.

# Desarrollo de los ejercicios

## 1. Clase Persona

En el primer ejercicio se creó una clase llamada `Persona`, la cual contiene tres atributos protegidos:

- Nombre.
- Apellidos.
- Fecha de nacimiento.

También se implementó un constructor para inicializar estos valores y métodos `get` para poder obtener la información almacenada en los atributos.

### Código

```php
<?php

class Persona
{
    protected string $nombre;
    protected string $apellidos;
    protected string $fechaNacimiento;

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
```

### Resultado

**Aquí se colocará la captura de pantalla del resultado de la ejecución.**

> 🖼️ **Imagen del resultado:**  
> `![Resultado clase Persona](ruta/de/la/imagen.png)`

---

## 2. Herencia con la clase Estudiante

En este ejercicio se creó la clase `Estudiante`, la cual hereda de la clase `Persona`.

La clase `Estudiante` agrega nuevos atributos relacionados con un estudiante, como el índice académico, cohorte, estado académico y modalidad de estudio.

Se utilizó `extends` para establecer la herencia y `parent::__construct()` para utilizar el constructor de la clase padre.

Posteriormente se creó un objeto `Estudiante` y se utilizaron los métodos `get` para mostrar la información.

### Código

```php
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
```

### Resultado

**Aquí se colocará la captura de pantalla con los datos del estudiante.**

> 🖼️ **Imagen del resultado:**  
> `![Resultado clase Estudiante](ruta/de/la/imagen.png)`

---

## 3. Uso de Traits

En este ejercicio se trabajó con un `trait` llamado `Modelo`.

Un trait permite reutilizar métodos en diferentes clases. En este caso, el trait contiene el método `getModelo()`, mientras que la clase `Ventas` utiliza el trait mediante la palabra reservada `use`.

La clase `Ventas` también hereda de `Coche`, por lo que puede utilizar las funcionalidades de ambas estructuras.

### Código

```php
<?php

class Coche{
    public function getMarca(){
        return "Renault";
    }
}

trait Modelo{
    public function getModelo(){
        parent::getMarca();
        echo 'Clio';
    }
}

class Ventas extends Coche{
    use Modelo;
}
```

### Resultado

**Aquí se colocará la captura de pantalla del resultado.**

> 🖼️ **Imagen del resultado:**  
> `![Resultado Trait](ruta/de/la/imagen.png)`

---

## 4. Métodos estáticos y `self`

En este ejercicio se utilizaron métodos estáticos mediante la palabra reservada `static`.

La clase `A` contiene los métodos `miFuncion()` y `otraFuncion()`. El segundo método utiliza `self::miFuncion()` para llamar al método definido dentro de la propia clase.

Posteriormente, la clase `B` hereda de `A` y redefine el método `miFuncion()`.

Finalmente se llama a `B::otraFuncion()` para observar el comportamiento de `self` cuando existe herencia.

### Código

```php
<?php

Class A{
    public static function miFuncion(){
        echo __CLASS__;
    }

    public static function otraFuncion(){
        self::miFuncion();
    }
}

Class B extends A{
    public static function miFuncion(){
        echo __CLASS__;
    }
}

B::otraFuncion();
```

### Resultado

**Aquí se colocará la captura de pantalla del resultado.**

> 🖼️ **Imagen del resultado:**  
> `![Resultado métodos estáticos](ruta/de/la/imagen.png)`

---

## 5. Herencia y sobrescritura de métodos

En este ejercicio se creó una clase `Coche` con un atributo protegido llamado `color`.

La clase contiene métodos para establecer y obtener el color, además de un método `printCaracteristicas()`.

Posteriormente se creó `CocheDeLujo`, que hereda de `Coche` y agrega el atributo `extras`.

También se sobrescribió el método `printCaracteristicas()` para mostrar tanto el color como los extras del vehículo.

### Código

```php
<?php

class Coche{
    protected $color;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function printCaracteristicas()
    {
        echo 'Color:'.$this->getColor();
    }
}

class CocheDeLujo extends Coche{
    protected $extras;

    public function setExtras($extras)
    {
        $this->extras = $extras;
    }

    public function getExtras()
    {
        return $this->extras;
    }

    public function printCaracteristicas()
    {
        echo 'Color:'.$this->color;
        echo '<hr/>';
        echo 'Extras:'.$this->extras;
    }
}

$miCoche = new CocheDeLujo();
$miCoche->setColor('Rojo');
$miCoche->setExtras('TV');
$miCoche->printCaracteristicas();
```

### Resultado

**Aquí se colocará la captura de pantalla donde se muestre el color y los extras.**

> 🖼️ **Imagen del resultado:**  
> `![Resultado CocheDeLujo](ruta/de/la/imagen.png)`

---

## 6. Constantes de clase

En este ejercicio se utilizó una constante dentro de una clase.

La clase `Coche` contiene la constante `RUEDAS`, cuyo valor es `4`.

La constante puede ser utilizada directamente desde la clase mediante `Coche::RUEDAS` y también desde un objeto mediante `$miCoche::RUEDAS`.

### Código

```php
<?php

Class Coche{
    const RUEDAS = 4;
}

Echo Coche::RUEDAS;

$miCoche = new Coche();
echo $miCoche::RUEDAS."<BR>";

?>
```

### Resultado

**Aquí se colocará la captura de pantalla del resultado.**

> 🖼️ **Imagen del resultado:**  
> `![Resultado constantes](ruta/de/la/imagen.png)`

---

## 7. Clase `final`

En este ejercicio se utilizó la palabra reservada `final`.

Una clase declarada como `final` no puede ser heredada por otra clase. Por esta razón, al intentar crear `CocheDeLujo` extendiendo `Coche`, se genera un error.

### Código

```php
<?php

final class Coche{
    public function getColor()
    {     
        echo "Rojo";
    }
}

class cocheDeLujo extends Coche {
    // Error Fatal, clase no heredada.
}
```

### Resultado

**Aquí se colocará la captura de pantalla donde se muestre el error generado al intentar heredar de una clase `final`.**

> 🖼️ **Imagen del resultado:**  
> `![Resultado clase final](ruta/de/la/imagen.png)`

---

## 8. Cálculo del área y perímetro de un círculo

En este ejercicio se creó una clase `Circulo` utilizando encapsulamiento y tipado de datos.

El atributo `$radio` fue declarado como `private`, por lo que solamente puede ser utilizado directamente dentro de la clase.

El constructor recibe el radio y lo almacena utilizando `$this`.

También se implementaron los métodos `calcularArea()` y `calcularPerimetro()` utilizando las fórmulas correspondientes.

Finalmente, se utilizó `number_format()` para mostrar los resultados con dos decimales.

### Código

```php
<?php

class Circulo{
    private float $radio;

    public function __construct(float $radio){
        $this->radio = $radio;
    }

    public function calcularArea(): float{
        return M_PI *($this->radio * $this->radio);
    }

    public function calcularPerimetro(): float{
        return 2 * M_PI * $this->radio;
    }
}

$miCirculo = new Circulo(4);

echo "\n";
echo "Area del circlul: \t" .number_format($miCirculo->calcularArea(), 2, ".", ".");
echo "\n";
echo "Perímetro del círculo: \t" .number_format($miCirculo->calcularPerimetro(), 2, ".", ".");

?>
```

### Resultado

**Aquí se colocará la captura de pantalla mostrando el área y el perímetro del círculo.**

> 🖼️ **Imagen del resultado:**  
> `![Resultado círculo](ruta/de/la/imagen.png)`

# 🧠 Conceptos aprendidos

A través de los diferentes ejercicios se pudieron aplicar varios conceptos importantes de la Programación Orientada a Objetos en PHP.

La **herencia** permitió crear nuevas clases a partir de otras existentes, como ocurrió con `Estudiante` a partir de `Persona` y `CocheDeLujo` a partir de `Coche`.

El **encapsulamiento** permitió controlar el acceso a los atributos utilizando modificadores como `private` y `protected`.

También se trabajó con **constructores**, los cuales permiten inicializar los atributos de un objeto al momento de crearlo.

Los **métodos estáticos** permitieron llamar funciones directamente desde una clase sin necesidad de crear un objeto. Además, se pudo observar el comportamiento de `self` cuando se trabaja con herencia.

Los **traits** permitieron reutilizar funcionalidades entre clases, mientras que las constantes permitieron definir valores que pertenecen a una clase.

Finalmente, se comprobó el funcionamiento de `final`, que evita que una clase pueda ser heredada.

# ⚠️ Dificultades y soluciones

Durante la realización de los ejercicios se presentaron algunos detalles relacionados con la sintaxis y el funcionamiento de PHP.

Uno de los principales puntos fue comprender la diferencia entre `self`, `parent` y `static`, especialmente cuando se trabaja con herencia.

También fue necesario tener en cuenta los modificadores de acceso, ya que los atributos `private` solamente pueden ser utilizados dentro de su propia clase, mientras que los atributos `protected` también pueden ser utilizados por las clases hijas.

Otro punto importante fue comprender que una clase declarada como `final` no puede ser heredada, por lo que intentar utilizar `extends` sobre ella genera un error fatal.

# 🎯 Conclusión

En este laboratorio pude reforzar los conceptos básicos de la Programación Orientada a Objetos utilizando PHP. A través de los diferentes ejercicios pude observar de una manera más práctica cómo funcionan las clases, objetos, constructores, atributos y métodos.

También pude trabajar con conceptos de herencia y encapsulamiento, viendo cómo una clase puede heredar características de otra y cómo los modificadores de acceso permiten controlar la forma en que se utilizan los atributos.

Además, los ejercicios con `static`, `self`, `parent`, `final`, constantes y `traits` ayudaron a comprender otras herramientas que ofrece PHP para organizar y reutilizar el código.

En general, la práctica permitió comprender mejor cómo se estructura un programa utilizando POO y cómo estos conceptos pueden ser utilizados posteriormente en proyectos más grandes y organizados.

# 📚 Referencias

- PHP Documentation. (2026). *Classes and Objects*. https://www.php.net/manual/en/language.oop5.php
- PHP Documentation. (2026). *Static Keyword*. https://www.php.net/manual/en/language.oop5.static.php
- PHP. (2026). PHP: Hypertext Preprocessor. https://www.php.net/

# 👤 Información del Estudiante

Este laboratorio ha sido desarrollado por la estudiante de la Universidad Tecnológica de Panamá:

**Nombre:** Vasti Legaspi  
**Correo:** vasti.legaspí@utp.ac.pa  
**Curso:** Desarrollo WEB  
**Instructor:** Irina Fong
