<?php

namespace PAXml;

/**
 * Class representing NyexportTYPEType
 *
 *
 * XSD Type: nyexportTYPE
 */
class NyexportTYPEType
{

    /**
     * @var \DateTime $datum
     */
    private $datum = null;

    /**
     * @var \DateTime $datumfrom
     */
    private $datumfrom = null;

    /**
     * @var \DateTime $datumtom
     */
    private $datumtom = null;

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
     * Gets as datumfrom
     *
     * @return \DateTime
     */
    public function getDatumfrom()
    {
        return $this->datumfrom;
    }

    /**
     * Sets a new datumfrom
     *
     * @param \DateTime $datumfrom
     * @return self
     */
    public function setDatumfrom(\DateTime $datumfrom)
    {
        $this->datumfrom = $datumfrom;
        return $this;
    }

    /**
     * Gets as datumtom
     *
     * @return \DateTime
     */
    public function getDatumtom()
    {
        return $this->datumtom;
    }

    /**
     * Sets a new datumtom
     *
     * @param \DateTime $datumtom
     * @return self
     */
    public function setDatumtom(\DateTime $datumtom)
    {
        $this->datumtom = $datumtom;
        return $this;
    }


}

