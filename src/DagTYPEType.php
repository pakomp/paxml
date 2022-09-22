<?php

namespace PAXml;

/**
 * Class representing DagTYPEType
 *
 *
 * XSD Type: dagTYPE
 */
class DagTYPEType
{

    /**
     * @var \DateTime $datum
     */
    private $datum = null;

    /**
     * @var \DateTime $starttid
     */
    private $starttid = null;

    /**
     * @var \DateTime $sluttid
     */
    private $sluttid = null;

    /**
     * @var float $timmar
     */
    private $timmar = null;

    /**
     * Gets as datum
     *
     * @return \DateTime
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Sets a new datum
     *
     * @param \DateTime $datum
     * @return self
     */
    public function setDatum(\DateTime $datum)
    {
        $this->datum = $datum;
        return $this;
    }

    /**
     * Gets as starttid
     *
     * @return \DateTime
     */
    public function getStarttid()
    {
        return $this->starttid;
    }

    /**
     * Sets a new starttid
     *
     * @param \DateTime $starttid
     * @return self
     */
    public function setStarttid(\DateTime $starttid)
    {
        $this->starttid = $starttid;
        return $this;
    }

    /**
     * Gets as sluttid
     *
     * @return \DateTime
     */
    public function getSluttid()
    {
        return $this->sluttid;
    }

    /**
     * Sets a new sluttid
     *
     * @param \DateTime $sluttid
     * @return self
     */
    public function setSluttid(\DateTime $sluttid)
    {
        $this->sluttid = $sluttid;
        return $this;
    }

    /**
     * Gets as timmar
     *
     * @return float
     */
    public function getTimmar()
    {
        return $this->timmar;
    }

    /**
     * Sets a new timmar
     *
     * @param float $timmar
     * @return self
     */
    public function setTimmar($timmar)
    {
        $this->timmar = $timmar;
        return $this;
    }


}

