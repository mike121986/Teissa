<?php
$pathName = dirname(__DIR__);
require_once($pathName."\\fastQuery\\FastQuery.php");

class SetGetProducto extends FastQuery
{
    private $id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $presentacion;
    private $unidad;
    private $fechaInrgeso;
    private $_status;

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     */
    public function setDescripcion($descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     */
    public function setPrecio($precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of presentacion
     */
    public function getPresentacion()
    {
        return $this->presentacion;
    }

    /**
     * Set the value of presentacion
     */
    public function setPresentacion($presentacion): self
    {
        $this->presentacion = $presentacion;

        return $this;
    }

    /**
     * Get the value of unidad
     */
    public function getUnidad()
    {
        return $this->unidad;
    }

    /**
     * Set the value of unidad
     */
    public function setUnidad($unidad): self
    {
        $this->unidad = $unidad;

        return $this;
    }

    /**
     * Get the value of fechaInrgeso
     */
    public function getFechaInrgeso()
    {
        return $this->fechaInrgeso;
    }

    /**
     * Set the value of fechaInrgeso
     */
    public function setFechaInrgeso($fechaInrgeso): self
    {
        $this->fechaInrgeso = $fechaInrgeso;

        return $this;
    }

    /**
     * Get the value of _status
     */
    public function get_status()
    {
        return $this->_status;
    }

    /**
     * Set the value of _status
     */
    public function set_status($_status): self
    {
        $this->_status = $_status;

        return $this;
    }
}
