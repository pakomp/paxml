<?php

namespace PAXml;

/**
 * Class representing JamkningTYPEType
 *
 *
 * XSD Type: jamkningTYPE
 */
class JamkningTYPEType
{

    /**
     * @var int $procent
     */
    private $procent = null;

    /**
     * @var float $belopp
     */
    private $belopp = null;

    /**
     * @var float $maxbelopp
     */
    private $maxbelopp = null;

    /**
     * Gets as procent
     *
     * @return int
     */
    public function getProcent()
    {
        return $this->procent;
    }

    /**
     * Sets a new procent
     *
     * @param int $procent
     * @return self
     */
    public function setProcent($procent)
    {
        $this->procent = $procent;
        return $this;
    }

    /**
     * Gets as belopp
     *
     * @return float
     */
    public function getBelopp()
    {
        return $this->belopp;
    }

    /**
     * Sets a new belopp
     *
     * @param float $belopp
     * @return self
     */
    public function setBelopp($belopp)
    {
        $this->belopp = $belopp;
        return $this;
    }

    /**
     * Gets as maxbelopp
     *
     * @return float
     */
    public function getMaxbelopp()
    {
        return $this->maxbelopp;
    }

    /**
     * Sets a new maxbelopp
     *
     * @param float $maxbelopp
     * @return self
     */
    public function setMaxbelopp($maxbelopp)
    {
        $this->maxbelopp = $maxbelopp;
        return $this;
    }


}

