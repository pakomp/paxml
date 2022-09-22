<?php

namespace PAXml;

/**
 * Class representing UtmatningTYPEType
 *
 *
 * XSD Type: utmatningTYPE
 */
class UtmatningTYPEType
{

    /**
     * @var float $belopp
     */
    private $belopp = null;

    /**
     * @var float $forbehall
     */
    private $forbehall = null;

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
     * Gets as forbehall
     *
     * @return float
     */
    public function getForbehall()
    {
        return $this->forbehall;
    }

    /**
     * Sets a new forbehall
     *
     * @param float $forbehall
     * @return self
     */
    public function setForbehall($forbehall)
    {
        $this->forbehall = $forbehall;
        return $this;
    }


}

