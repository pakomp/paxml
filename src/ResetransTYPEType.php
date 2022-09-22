<?php

namespace PAXml;

/**
 * Class representing ResetransTYPEType
 *
 *
 * XSD Type: resetransTYPE
 */
class ResetransTYPEType
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
     * @var \DateTime $tidpunkt
     */
    private $tidpunkt = null;

    /**
     * @var string $resekod
     */
    private $resekod = null;

    /**
     * @var \PAXml\FortsattTYPEType $fortsatt
     */
    private $fortsatt = null;

    /**
     * @var string $landskod
     */
    private $landskod = null;

    /**
     * @var string $valutakod
     */
    private $valutakod = null;

    /**
     * @var float $valutafaktor
     */
    private $valutafaktor = null;

    /**
     * @var float $belopp
     */
    private $belopp = null;

    /**
     * @var float $moms
     */
    private $moms = null;

    /**
     * @var bool $ftgkort
     */
    private $ftgkort = null;

    /**
     * @var int $antdeltag
     */
    private $antdeltag = null;

    /**
     * @var \PAXml\DeltagareTYPEType[] $deltagarlista
     */
    private $deltagarlista = null;

    /**
     * @var string $varugrupp
     */
    private $varugrupp = null;

    /**
     * @var string $specifikation
     */
    private $specifikation = null;

    /**
     * @var string $kontonr
     */
    private $kontonr = null;

    /**
     * @var string $bilnr
     */
    private $bilnr = null;

    /**
     * @var string $bilmodell
     */
    private $bilmodell = null;

    /**
     * @var string $foretag
     */
    private $foretag = null;

    /**
     * @var string $kontakt
     */
    private $kontakt = null;

    /**
     * @var string $syfte
     */
    private $syfte = null;

    /**
     * @var string $ort
     */
    private $ort = null;

    /**
     * @var int $kmstart
     */
    private $kmstart = null;

    /**
     * @var int $kmstopp
     */
    private $kmstopp = null;

    /**
     * @var int $kilometer
     */
    private $kilometer = null;

    /**
     * @var int $antpass
     */
    private $antpass = null;

    /**
     * @var int $antlast
     */
    private $antlast = null;

    /**
     * @var float $timmar
     */
    private $timmar = null;

    /**
     * @var string $samlingsid
     */
    private $samlingsid = null;

    /**
     * @var \PAXml\KundnrTYPEType $kundnr
     */
    private $kundnr = null;

    /**
     * @var \PAXml\ResenhetTYPEType[] $resenheter
     */
    private $resenheter = null;

    /**
     * @var string $anteckning
     */
    private $anteckning = null;

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
     * Gets as tidpunkt
     *
     * @return \DateTime
     */
    public function getTidpunkt()
    {
        return $this->tidpunkt;
    }

    /**
     * Sets a new tidpunkt
     *
     * @param \DateTime $tidpunkt
     * @return self
     */
    public function setTidpunkt(\DateTime $tidpunkt)
    {
        $this->tidpunkt = $tidpunkt;
        return $this;
    }

    /**
     * Gets as resekod
     *
     * @return string
     */
    public function getResekod()
    {
        return $this->resekod;
    }

    /**
     * Sets a new resekod
     *
     * @param string $resekod
     * @return self
     */
    public function setResekod($resekod)
    {
        $this->resekod = $resekod;
        return $this;
    }

    /**
     * Gets as fortsatt
     *
     * @return \PAXml\FortsattTYPEType
     */
    public function getFortsatt()
    {
        return $this->fortsatt;
    }

    /**
     * Sets a new fortsatt
     *
     * @param \PAXml\FortsattTYPEType $fortsatt
     * @return self
     */
    public function setFortsatt(\PAXml\FortsattTYPEType $fortsatt)
    {
        $this->fortsatt = $fortsatt;
        return $this;
    }

    /**
     * Gets as landskod
     *
     * @return string
     */
    public function getLandskod()
    {
        return $this->landskod;
    }

    /**
     * Sets a new landskod
     *
     * @param string $landskod
     * @return self
     */
    public function setLandskod($landskod)
    {
        $this->landskod = $landskod;
        return $this;
    }

    /**
     * Gets as valutakod
     *
     * @return string
     */
    public function getValutakod()
    {
        return $this->valutakod;
    }

    /**
     * Sets a new valutakod
     *
     * @param string $valutakod
     * @return self
     */
    public function setValutakod($valutakod)
    {
        $this->valutakod = $valutakod;
        return $this;
    }

    /**
     * Gets as valutafaktor
     *
     * @return float
     */
    public function getValutafaktor()
    {
        return $this->valutafaktor;
    }

    /**
     * Sets a new valutafaktor
     *
     * @param float $valutafaktor
     * @return self
     */
    public function setValutafaktor($valutafaktor)
    {
        $this->valutafaktor = $valutafaktor;
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
     * Gets as ftgkort
     *
     * @return bool
     */
    public function getFtgkort()
    {
        return $this->ftgkort;
    }

    /**
     * Sets a new ftgkort
     *
     * @param bool $ftgkort
     * @return self
     */
    public function setFtgkort($ftgkort)
    {
        $this->ftgkort = $ftgkort;
        return $this;
    }

    /**
     * Gets as antdeltag
     *
     * @return int
     */
    public function getAntdeltag()
    {
        return $this->antdeltag;
    }

    /**
     * Sets a new antdeltag
     *
     * @param int $antdeltag
     * @return self
     */
    public function setAntdeltag($antdeltag)
    {
        $this->antdeltag = $antdeltag;
        return $this;
    }

    /**
     * Adds as deltagare
     *
     * @return self
     * @param \PAXml\DeltagareTYPEType $deltagare
     */
    public function addToDeltagarlista(\PAXml\DeltagareTYPEType $deltagare)
    {
        $this->deltagarlista[] = $deltagare;
        return $this;
    }

    /**
     * isset deltagarlista
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeltagarlista($index)
    {
        return isset($this->deltagarlista[$index]);
    }

    /**
     * unset deltagarlista
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeltagarlista($index)
    {
        unset($this->deltagarlista[$index]);
    }

    /**
     * Gets as deltagarlista
     *
     * @return \PAXml\DeltagareTYPEType[]
     */
    public function getDeltagarlista()
    {
        return $this->deltagarlista;
    }

    /**
     * Sets a new deltagarlista
     *
     * @param \PAXml\DeltagareTYPEType[] $deltagarlista
     * @return self
     */
    public function setDeltagarlista(array $deltagarlista)
    {
        $this->deltagarlista = $deltagarlista;
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
     * Gets as specifikation
     *
     * @return string
     */
    public function getSpecifikation()
    {
        return $this->specifikation;
    }

    /**
     * Sets a new specifikation
     *
     * @param string $specifikation
     * @return self
     */
    public function setSpecifikation($specifikation)
    {
        $this->specifikation = $specifikation;
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
     * Gets as bilnr
     *
     * @return string
     */
    public function getBilnr()
    {
        return $this->bilnr;
    }

    /**
     * Sets a new bilnr
     *
     * @param string $bilnr
     * @return self
     */
    public function setBilnr($bilnr)
    {
        $this->bilnr = $bilnr;
        return $this;
    }

    /**
     * Gets as bilmodell
     *
     * @return string
     */
    public function getBilmodell()
    {
        return $this->bilmodell;
    }

    /**
     * Sets a new bilmodell
     *
     * @param string $bilmodell
     * @return self
     */
    public function setBilmodell($bilmodell)
    {
        $this->bilmodell = $bilmodell;
        return $this;
    }

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
     * Gets as kontakt
     *
     * @return string
     */
    public function getKontakt()
    {
        return $this->kontakt;
    }

    /**
     * Sets a new kontakt
     *
     * @param string $kontakt
     * @return self
     */
    public function setKontakt($kontakt)
    {
        $this->kontakt = $kontakt;
        return $this;
    }

    /**
     * Gets as syfte
     *
     * @return string
     */
    public function getSyfte()
    {
        return $this->syfte;
    }

    /**
     * Sets a new syfte
     *
     * @param string $syfte
     * @return self
     */
    public function setSyfte($syfte)
    {
        $this->syfte = $syfte;
        return $this;
    }

    /**
     * Gets as ort
     *
     * @return string
     */
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * Sets a new ort
     *
     * @param string $ort
     * @return self
     */
    public function setOrt($ort)
    {
        $this->ort = $ort;
        return $this;
    }

    /**
     * Gets as kmstart
     *
     * @return int
     */
    public function getKmstart()
    {
        return $this->kmstart;
    }

    /**
     * Sets a new kmstart
     *
     * @param int $kmstart
     * @return self
     */
    public function setKmstart($kmstart)
    {
        $this->kmstart = $kmstart;
        return $this;
    }

    /**
     * Gets as kmstopp
     *
     * @return int
     */
    public function getKmstopp()
    {
        return $this->kmstopp;
    }

    /**
     * Sets a new kmstopp
     *
     * @param int $kmstopp
     * @return self
     */
    public function setKmstopp($kmstopp)
    {
        $this->kmstopp = $kmstopp;
        return $this;
    }

    /**
     * Gets as kilometer
     *
     * @return int
     */
    public function getKilometer()
    {
        return $this->kilometer;
    }

    /**
     * Sets a new kilometer
     *
     * @param int $kilometer
     * @return self
     */
    public function setKilometer($kilometer)
    {
        $this->kilometer = $kilometer;
        return $this;
    }

    /**
     * Gets as antpass
     *
     * @return int
     */
    public function getAntpass()
    {
        return $this->antpass;
    }

    /**
     * Sets a new antpass
     *
     * @param int $antpass
     * @return self
     */
    public function setAntpass($antpass)
    {
        $this->antpass = $antpass;
        return $this;
    }

    /**
     * Gets as antlast
     *
     * @return int
     */
    public function getAntlast()
    {
        return $this->antlast;
    }

    /**
     * Sets a new antlast
     *
     * @param int $antlast
     * @return self
     */
    public function setAntlast($antlast)
    {
        $this->antlast = $antlast;
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
     * Gets as anteckning
     *
     * @return string
     */
    public function getAnteckning()
    {
        return $this->anteckning;
    }

    /**
     * Sets a new anteckning
     *
     * @param string $anteckning
     * @return self
     */
    public function setAnteckning($anteckning)
    {
        $this->anteckning = $anteckning;
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

