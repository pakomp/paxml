<?php

namespace PAXml;

/**
 * Class representing LonetransTYPEType
 *
 *
 * XSD Type: lonetransTYPE
 */
class LonetransTYPEType
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
     * @var string $lonkod
     */
    private $lonkod = null;

    /**
     * @var string $lonart
     */
    private $lonart = null;

    /**
     * @var string $benamning
     */
    private $benamning = null;

    /**
     * @var string $kommentar
     */
    private $kommentar = null;

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
     * @var float $antal
     */
    private $antal = null;

    /**
     * @var float $apris
     */
    private $apris = null;

    /**
     * @var float $belopp
     */
    private $belopp = null;

    /**
     * @var string $varugrupp
     */
    private $varugrupp = null;

    /**
     * @var float $moms
     */
    private $moms = null;

    /**
     * @var string $samlingsid
     */
    private $samlingsid = null;

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
     * Gets as lonkod
     *
     * @return string
     */
    public function getLonkod()
    {
        return $this->lonkod;
    }

    /**
     * Sets a new lonkod
     *
     * @param string $lonkod
     * @return self
     */
    public function setLonkod($lonkod)
    {
        $this->lonkod = $lonkod;
        return $this;
    }

    /**
     * Gets as lonart
     *
     * @return string
     */
    public function getLonart()
    {
        return $this->lonart;
    }

    /**
     * Sets a new lonart
     *
     * @param string $lonart
     * @return self
     */
    public function setLonart($lonart)
    {
        $this->lonart = $lonart;
        return $this;
    }

    /**
     * Gets as benamning
     *
     * @return string
     */
    public function getBenamning()
    {
        return $this->benamning;
    }

    /**
     * Sets a new benamning
     *
     * @param string $benamning
     * @return self
     */
    public function setBenamning($benamning)
    {
        $this->benamning = $benamning;
        return $this;
    }

    /**
     * Gets as kommentar
     *
     * @return string
     */
    public function getKommentar()
    {
        return $this->kommentar;
    }

    /**
     * Sets a new kommentar
     *
     * @param string $kommentar
     * @return self
     */
    public function setKommentar($kommentar)
    {
        $this->kommentar = $kommentar;
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
     * Gets as antal
     *
     * @return float
     */
    public function getAntal()
    {
        return $this->antal;
    }

    /**
     * Sets a new antal
     *
     * @param float $antal
     * @return self
     */
    public function setAntal($antal)
    {
        $this->antal = $antal;
        return $this;
    }

    /**
     * Gets as apris
     *
     * @return float
     */
    public function getApris()
    {
        return $this->apris;
    }

    /**
     * Sets a new apris
     *
     * @param float $apris
     * @return self
     */
    public function setApris($apris)
    {
        $this->apris = $apris;
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
     * Gets as varugrupp
     *
     * @return string
     */
    public function getVarugrupp()
    {
        return $this->varugrupp;
    }

    /**
     * Sets a new varugrupp
     *
     * @param string $varugrupp
     * @return self
     */
    public function setVarugrupp($varugrupp)
    {
        $this->varugrupp = $varugrupp;
        return $this;
    }

    /**
     * Gets as moms
     *
     * @return float
     */
    public function getMoms()
    {
        return $this->moms;
    }

    /**
     * Sets a new moms
     *
     * @param float $moms
     * @return self
     */
    public function setMoms($moms)
    {
        $this->moms = $moms;
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

