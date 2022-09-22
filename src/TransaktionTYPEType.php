<?php

namespace PAXml;

/**
 * Class representing TransaktionTYPEType
 *
 *
 * XSD Type: transaktionTYPE
 */
class TransaktionTYPEType
{

    /**
     * @var string $kontonr
     */
    private $kontonr = null;

    /**
     * @var float $belopp
     */
    private $belopp = null;

    /**
     * @var \PAXml\KundnrTYPEType $kundnr
     */
    private $kundnr = null;

    /**
     * @var \PAXml\ResenhetTYPEType[] $resenheter
     */
    private $resenheter = null;

    /**
     * Gets as kontonr
     *
     * @return string
     */
    public function getKontonr()
    {
        return $this->kontonr;
    }

    /**
     * Sets a new kontonr
     *
     * @param string $kontonr
     * @return self
     */
    public function setKontonr($kontonr)
    {
        $this->kontonr = $kontonr;
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
     * Gets as kundnr
     *
     * @return \PAXml\KundnrTYPEType
     */
    public function getKundnr()
    {
        return $this->kundnr;
    }

    /**
     * Sets a new kundnr
     *
     * @param \PAXml\KundnrTYPEType $kundnr
     * @return self
     */
    public function setKundnr(\PAXml\KundnrTYPEType $kundnr)
    {
        $this->kundnr = $kundnr;
        return $this;
    }

    /**
     * Adds as resenhet
     *
     * @return self
     * @param \PAXml\ResenhetTYPEType $resenhet
     */
    public function addToResenheter(\PAXml\ResenhetTYPEType $resenhet)
    {
        $this->resenheter[] = $resenhet;
        return $this;
    }

    /**
     * isset resenheter
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResenheter($index)
    {
        return isset($this->resenheter[$index]);
    }

    /**
     * unset resenheter
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResenheter($index)
    {
        unset($this->resenheter[$index]);
    }

    /**
     * Gets as resenheter
     *
     * @return \PAXml\ResenhetTYPEType[]
     */
    public function getResenheter()
    {
        return $this->resenheter;
    }

    /**
     * Sets a new resenheter
     *
     * @param \PAXml\ResenhetTYPEType[] $resenheter
     * @return self
     */
    public function setResenheter(array $resenheter)
    {
        $this->resenheter = $resenheter;
        return $this;
    }


}

