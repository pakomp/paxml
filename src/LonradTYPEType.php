<?php

namespace PAXml;

/**
 * Class representing LonradTYPEType
 *
 *
 * XSD Type: lonradTYPE
 */
class LonradTYPEType
{

    /**
     * @var int $radnr
     */
    private $radnr = null;

    /**
     * @var string $lonart
     */
    private $lonart = null;

    /**
     * @var string $font
     */
    private $font = null;

    /**
     * @var string $benamning
     */
    private $benamning = null;

    /**
     * @var string $kommentar
     */
    private $kommentar = null;

    /**
     * @var \DateTime $datumfrom
     */
    private $datumfrom = null;

    /**
     * @var \DateTime $datumtom
     */
    private $datumtom = null;

    /**
     * @var float $timmar
     */
    private $timmar = null;

    /**
     * @var float $arbetsdagar
     */
    private $arbetsdagar = null;

    /**
     * @var float $dagar
     */
    private $dagar = null;

    /**
     * @var string $enhet
     */
    private $enhet = null;

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
     * @var string $lonetyp
     */
    private $lonetyp = null;

    /**
     * @var string $skattetyp
     */
    private $skattetyp = null;

    /**
     * @var float $skattprocent
     */
    private $skattprocent = null;

    /**
     * @var string $avgifttyp
     */
    private $avgifttyp = null;

    /**
     * @var float $avgiftprocent
     */
    private $avgiftprocent = null;

    /**
     * @var bool $regional
     */
    private $regional = null;

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
     * @var string $statistikkod
     */
    private $statistikkod = null;

    /**
     * @var string $kontrolluppgift
     */
    private $kontrolluppgift = null;

    /**
     * @var string $info
     */
    private $info = null;

    /**
     * Gets as radnr
     *
     * @return int
     */
    public function getRadnr()
    {
        return $this->radnr;
    }

    /**
     * Sets a new radnr
     *
     * @param int $radnr
     * @return self
     */
    public function setRadnr($radnr)
    {
        $this->radnr = $radnr;
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
     * Gets as font
     *
     * @return string
     */
    public function getFont()
    {
        return $this->font;
    }

    /**
     * Sets a new font
     *
     * @param string $font
     * @return self
     */
    public function setFont($font)
    {
        $this->font = $font;
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
     * Gets as arbetsdagar
     *
     * @return float
     */
    public function getArbetsdagar()
    {
        return $this->arbetsdagar;
    }

    /**
     * Sets a new arbetsdagar
     *
     * @param float $arbetsdagar
     * @return self
     */
    public function setArbetsdagar($arbetsdagar)
    {
        $this->arbetsdagar = $arbetsdagar;
        return $this;
    }

    /**
     * Gets as dagar
     *
     * @return float
     */
    public function getDagar()
    {
        return $this->dagar;
    }

    /**
     * Sets a new dagar
     *
     * @param float $dagar
     * @return self
     */
    public function setDagar($dagar)
    {
        $this->dagar = $dagar;
        return $this;
    }

    /**
     * Gets as enhet
     *
     * @return string
     */
    public function getEnhet()
    {
        return $this->enhet;
    }

    /**
     * Sets a new enhet
     *
     * @param string $enhet
     * @return self
     */
    public function setEnhet($enhet)
    {
        $this->enhet = $enhet;
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
     * Gets as lonetyp
     *
     * @return string
     */
    public function getLonetyp()
    {
        return $this->lonetyp;
    }

    /**
     * Sets a new lonetyp
     *
     * @param string $lonetyp
     * @return self
     */
    public function setLonetyp($lonetyp)
    {
        $this->lonetyp = $lonetyp;
        return $this;
    }

    /**
     * Gets as skattetyp
     *
     * @return string
     */
    public function getSkattetyp()
    {
        return $this->skattetyp;
    }

    /**
     * Sets a new skattetyp
     *
     * @param string $skattetyp
     * @return self
     */
    public function setSkattetyp($skattetyp)
    {
        $this->skattetyp = $skattetyp;
        return $this;
    }

    /**
     * Gets as skattprocent
     *
     * @return float
     */
    public function getSkattprocent()
    {
        return $this->skattprocent;
    }

    /**
     * Sets a new skattprocent
     *
     * @param float $skattprocent
     * @return self
     */
    public function setSkattprocent($skattprocent)
    {
        $this->skattprocent = $skattprocent;
        return $this;
    }

    /**
     * Gets as avgifttyp
     *
     * @return string
     */
    public function getAvgifttyp()
    {
        return $this->avgifttyp;
    }

    /**
     * Sets a new avgifttyp
     *
     * @param string $avgifttyp
     * @return self
     */
    public function setAvgifttyp($avgifttyp)
    {
        $this->avgifttyp = $avgifttyp;
        return $this;
    }

    /**
     * Gets as avgiftprocent
     *
     * @return float
     */
    public function getAvgiftprocent()
    {
        return $this->avgiftprocent;
    }

    /**
     * Sets a new avgiftprocent
     *
     * @param float $avgiftprocent
     * @return self
     */
    public function setAvgiftprocent($avgiftprocent)
    {
        $this->avgiftprocent = $avgiftprocent;
        return $this;
    }

    /**
     * Gets as regional
     *
     * @return bool
     */
    public function getRegional()
    {
        return $this->regional;
    }

    /**
     * Sets a new regional
     *
     * @param bool $regional
     * @return self
     */
    public function setRegional($regional)
    {
        $this->regional = $regional;
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
     * Gets as statistikkod
     *
     * @return string
     */
    public function getStatistikkod()
    {
        return $this->statistikkod;
    }

    /**
     * Sets a new statistikkod
     *
     * @param string $statistikkod
     * @return self
     */
    public function setStatistikkod($statistikkod)
    {
        $this->statistikkod = $statistikkod;
        return $this;
    }

    /**
     * Gets as kontrolluppgift
     *
     * @return string
     */
    public function getKontrolluppgift()
    {
        return $this->kontrolluppgift;
    }

    /**
     * Sets a new kontrolluppgift
     *
     * @param string $kontrolluppgift
     * @return self
     */
    public function setKontrolluppgift($kontrolluppgift)
    {
        $this->kontrolluppgift = $kontrolluppgift;
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

