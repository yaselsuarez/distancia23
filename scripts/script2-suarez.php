<?php
/**
 * Script para manejar los datos de una persona.
 *
 * Este script define una clase Persona con métodos para establecer y obtener los datos
 * básicos de una persona, como su nombre, edad y género. También se incluye un método
 * para mostrar los datos de la persona en formato HTML.
 *
 * Autor: Yasel Suárez
 * Versión: 1.0
 */

class Persona {
    private $nombre;
    private $edad;
    private $genero;

    /**
     * Constructor de la clase Persona.
     *
     * @param string $nombre El nombre de la persona.
     * @param int $edad La edad de la persona.
     * @param string $genero El género de la persona ("masculino", "femenino" o "otro").
     */
    public function __construct($nombre, $edad, $genero) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->genero = $genero;
    }

    /**
     * Establece el nombre de la persona.
     *
     * @param string $nombre El nombre de la persona.
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * Obtiene el nombre de la persona.
     *
     * @return string El nombre de la persona.
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Establece la edad de la persona.
     *
     * @param int $edad La edad de la persona.
     */
    public function setEdad($edad) {
        $this->edad = $edad;
    }

    /**
     * Obtiene la edad de la persona.
     *
     * @return int La edad de la persona.
     */
    public function getEdad() {
        return $this->edad;
    }

    /**
     * Establece el género de la persona.
     *
     * @param string $genero El género de la persona ("masculino", "femenino" o "otro").
     */
    public function setGenero($genero) {
        $this->genero = $genero;
    }

    /**
     * Obtiene el género de la persona.
     *
     * @return string El género de la persona ("masculino", "femenino" o "otro").
     */
    public function getGenero() {
        return $this->genero;
    }

    /**
     * Muestra los datos de la persona en formato HTML.
     *
     * @return string Los datos de la persona en formato HTML.
     */
    public function mostrarDatosHTML() {
        $html = "<p>Nombre: " . $this->nombre . "</p>\n";
        $html .= "<p>Edad: " . $this->edad . "</p>\n";
        $html .= "<p>Género: " . $this->genero . "</p>\n";
        return $html;
    }
}

// Crear una persona y establecer sus datos
$persona = new Persona("Yasel Suárez", 40, "masculino");

// Mostrar los datos de la persona en formato HTML
echo $persona->mostrarDatosHTML();

?>
