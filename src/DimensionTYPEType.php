<?php

namespace PAXml;

/**
 * Class representing DimensionTYPEType
 *
 *
 * XSD Type: dimensionTYPE
 */
class DimensionTYPEType
{

    /**
     * @var int $dim
     */
    private $dim = null;

    /**
     * @var string $namn
     */
    private $namn = null;

    /**
     * @var string $info
     */
    private $info = null;

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
     * Gets as namn
     *
     * @return string
     */
    public function getNamn()
    {
        return $this->namn;
    }

    /**
     * Sets a new namn
     *
     * @param string $namn
     * @return self
     */
    public function setNamn($namn)
    {
        $this->namn = $namn;
        return $this;
    }

    /**
     * Gets as info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * @param string $info
     * @return self
     */
    public function setInfo($info)
    {
        $this->info = $info;
        return $this;
    }


}

