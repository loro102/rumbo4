<?php

namespace Rumbo\ProgramaBundle\Entity;

/**
 * Cliente
 */
class Cliente
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var string
     */
    private $apellido2;

    /**
     * @var integer
     */
    private $agente;

    /**
     * @var string
     */
    private $colectivo;

    /**
     * @var string
     */
    private $precio;

    /**
     * @var string
     */
    private $descuento;

    /**
     * @var string
     */
    private $nif;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var string
     */
    private $codigopostal;

    /**
     * @var string
     */
    private $localidad;

    /**
     * @var string
     */
    private $provincia;

    /**
     * @var \DateTime
     */
    private $fechanacimiento;

    /**
     * @var \DateTime
     */
    private $fechadealta;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $telefono2;

    /**
     * @var string
     */
    private $telefono3;

    /**
     * @var string
     */
    private $iban;

    /**
     * @var string
     */
    private $notas;

    /**
     * @var boolean
     */
    private $abonado;

    /**
     * @var boolean
     */
    private $firmaabono;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Cliente
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Cliente
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set apellido2
     *
     * @param string $apellido2
     *
     * @return Cliente
     */
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;

        return $this;
    }

    /**
     * Get apellido2
     *
     * @return string
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     * Set agente
     *
     * @param integer $agente
     *
     * @return Cliente
     */
    public function setAgente($agente)
    {
        $this->agente = $agente;

        return $this;
    }

    /**
     * Get agente
     *
     * @return integer
     */
    public function getAgente()
    {
        return $this->agente;
    }

    /**
     * Set colectivo
     *
     * @param string $colectivo
     *
     * @return Cliente
     */
    public function setColectivo($colectivo)
    {
        $this->colectivo = $colectivo;

        return $this;
    }

    /**
     * Get colectivo
     *
     * @return string
     */
    public function getColectivo()
    {
        return $this->colectivo;
    }

    /**
     * Set precio
     *
     * @param string $precio
     *
     * @return Cliente
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set descuento
     *
     * @param string $descuento
     *
     * @return Cliente
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return string
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set nif
     *
     * @param string $nif
     *
     * @return Cliente
     */
    public function setNif($nif)
    {
        $this->nif = $nif;

        return $this;
    }

    /**
     * Get nif
     *
     * @return string
     */
    public function getNif()
    {
        return $this->nif;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Cliente
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set codigopostal
     *
     * @param string $codigopostal
     *
     * @return Cliente
     */
    public function setCodigopostal($codigopostal)
    {
        $this->codigopostal = $codigopostal;

        return $this;
    }

    /**
     * Get codigopostal
     *
     * @return string
     */
    public function getCodigopostal()
    {
        return $this->codigopostal;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     *
     * @return Cliente
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Cliente
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set fechanacimiento
     *
     * @param \DateTime $fechanacimiento
     *
     * @return Cliente
     */
    public function setFechanacimiento($fechanacimiento)
    {
        $this->fechanacimiento = $fechanacimiento;

        return $this;
    }

    /**
     * Get fechanacimiento
     *
     * @return \DateTime
     */
    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }

    /**
     * Set fechadealta
     *
     * @param \DateTime $fechadealta
     *
     * @return Cliente
     */
    public function setFechadealta($fechadealta)
    {
        $this->fechadealta = $fechadealta;

        return $this;
    }

    /**
     * Get fechadealta
     *
     * @return \DateTime
     */
    public function getFechadealta()
    {
        return $this->fechadealta;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Cliente
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Cliente
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set telefono2
     *
     * @param string $telefono2
     *
     * @return Cliente
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    /**
     * Get telefono2
     *
     * @return string
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * Set telefono3
     *
     * @param string $telefono3
     *
     * @return Cliente
     */
    public function setTelefono3($telefono3)
    {
        $this->telefono3 = $telefono3;

        return $this;
    }

    /**
     * Get telefono3
     *
     * @return string
     */
    public function getTelefono3()
    {
        return $this->telefono3;
    }

    /**
     * Set iban
     *
     * @param string $iban
     *
     * @return Cliente
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set notas
     *
     * @param string $notas
     *
     * @return Cliente
     */
    public function setNotas($notas)
    {
        $this->notas = $notas;

        return $this;
    }

    /**
     * Get notas
     *
     * @return string
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * Set abonado
     *
     * @param boolean $abonado
     *
     * @return Cliente
     */
    public function setAbonado($abonado)
    {
        $this->abonado = $abonado;

        return $this;
    }

    /**
     * Get abonado
     *
     * @return boolean
     */
    public function getAbonado()
    {
        return $this->abonado;
    }

    /**
     * Set firmaabono
     *
     * @param boolean $firmaabono
     *
     * @return Cliente
     */
    public function setFirmaabono($firmaabono)
    {
        $this->firmaabono = $firmaabono;

        return $this;
    }

    /**
     * Get firmaabono
     *
     * @return boolean
     */
    public function getFirmaabono()
    {
        return $this->firmaabono;
    }
}

