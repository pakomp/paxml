<?php

namespace PAXml;

/**
 * Class representing TidtransTYPEType
 *
 *
 * XSD Type: tidtransTYPE
 */
class TidtransTYPEType
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
     * @var string $tidkod
     */
    private $tidkod = null;

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
     * @var float $omfattning
     */
    private $omfattning = null;

    /**
     * @var string $barn
     */
    private $barn = null;

    /**
     * @var string $samlingsid
     */
    private $samlingsid = null;

    /**
     * @var bool $semgrund
     */
    private $semgrund = null;

    /**
     * @var string $kontonr
     */
    private $kontonr = null;

    /**
     * @var \PAXml\KundnrTYPEType $kundnr
     */
    private $kundnr = null;

    /**
     * @var \PAXml\ResenhetTYPEType[] $resenheter
     */
    private $resenheter = null;

    /**
     * @var string $info
     */
    private $info = null;

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
     * Gets as tidkod
     *
     * @return string
     */
    public function getTidkod()
    {
        return $this->tidkod;
    }

    /**
     * Sets a new tidkod
     *
     * @param string $tidkod
     * @return self
     */
    public function setTidkod($tidkod)
    {
        $this->tidkod = $tidkod;
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

    /**
     * Gets as omfattning
     *
     * @return float
     */
    public function getOmfattning()
    {
        return $this->omfattning;
    }

    /**
     * Sets a new omfattning
     *
     * @param float $omfattning
     * @return self
     */
    public function setOmfattning($omfattning)
    {
        $this->omfattning = $omfattning;
        return $this;
    }

    /**
     * Gets as barn
     *
     * @return string
     */
    public function getBarn()
    {
        return $this->barn;
    }

    /**
     * Sets a new barn
     *
     * @param string $barn
     * @return self
     */
    public function setBarn($barn)
    {
        $this->barn = $barn;
        return $this;
    }

    /**
     * Gets as samlingsid
     *
     * @return string
     */
    public function getSamlingsid()
    {
        return $this->samlingsid;
    }

    /**
     * Sets a new samlingsid
     *
     * @param string $samlingsid
     * @return self
     */
    public function setSamlingsid($samlingsid)
    {
        $this->samlingsid = $samlingsid;
        return $this;
    }

    /**
     * Gets as semgrund
     *
     * @return bool
     */
    public function getSemgrund()
    {
        return $this->semgrund;
    }

    /**
     * Sets a new semgrund
     *
     * @param bool $semgrund
     * @return self
     */
    public function setSemgrund($semgrund)
    {
        $this->semgrund = $semgrund;
        return $this;
    }

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

