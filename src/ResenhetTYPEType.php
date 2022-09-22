<?php

namespace PAXml;

/**
 * Class representing ResenhetTYPEType
 *
 *
 * XSD Type: resenhetTYPE
 */
class ResenhetTYPEType
{

    /**
     * @var int $dim
     */
    private $dim = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * Gets as dim
     *
     * @return int
     */
    public function getDim()
    {
        return $this->dim;
    }

    /**
     * Sets a new dim
     *
     * @param int $dim
     * @return self
     */
    public function setDim($dim)
    {
        $this->dim = $dim;
        return $this;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }


}

