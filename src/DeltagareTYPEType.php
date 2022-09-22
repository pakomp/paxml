<?php

namespace PAXml;

/**
 * Class representing DeltagareTYPEType
 *
 *
 * XSD Type: deltagareTYPE
 */
class DeltagareTYPEType
{

    /**
     * @var string $foretag
     */
    private $foretag = null;

    /**
     * @var string $namn
     */
    private $namn = null;

    /**
     * Gets as foretag
     *
     * @return string
     */
    public function getForetag()
    {
        return $this->foretag;
    }

    /**
     * Sets a new foretag
     *
     * @param string $foretag
     * @return self
     */
    public function setForetag($foretag)
    {
        $this->foretag = $foretag;
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


}

