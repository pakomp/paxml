<?php

namespace PAXml;

/**
 * Class representing HandelseTYPEType
 *
 *
 * XSD Type: handelseTYPE
 */
class HandelseTYPEType
{

    /**
     * @var int $postid
     */
    private $postid = null;

    /**
     * @var string $anstid
     */
    private $anstid = null;

    /**
     * @var string $persnr
     */
    private $persnr = null;

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
     * Gets as postid
     *
     * @return int
     */
    public function getPostid()
    {
        return $this->postid;
    }

    /**
     * Sets a new postid
     *
     * @param int $postid
     * @return self
     */
    public function setPostid($postid)
    {
        $this->postid = $postid;
        return $this;
    }

    /**
     * Gets as anstid
     *
     * @return string
     */
    public function getAnstid()
    {
        return $this->anstid;
    }

    /**
     * Sets a new anstid
     *
     * @param string $anstid
     * @return self
     */
    public function setAnstid($anstid)
    {
        $this->anstid = $anstid;
        return $this;
    }

    /**
     * Gets as persnr
     *
     * @return string
     */
    public function getPersnr()
    {
        return $this->persnr;
    }

    /**
     * Sets a new persnr
     *
     * @param string $persnr
     * @return self
     */
    public function setPersnr($persnr)
    {
        $this->persnr = $persnr;
        return $this;
    }

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

