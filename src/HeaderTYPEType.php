<?php

namespace PAXml;

/**
 * Class representing HeaderTYPEType
 *
 *
 * XSD Type: headerTYPE
 */
class HeaderTYPEType
{

    /**
     * @var string $format
     */
    private $format = null;

    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var \DateTime $datum
     */
    private $datum = null;

    /**
     * @var \PAXml\NyexportTYPEType $nyexport
     */
    private $nyexport = null;

    /**
     * @var string $foretagid
     */
    private $foretagid = null;

    /**
     * @var string $foretagorgnr
     */
    private $foretagorgnr = null;

    /**
     * @var string $foretagnamn
     */
    private $foretagnamn = null;

    /**
     * @var string $extraadress
     */
    private $extraadress = null;

    /**
     * @var string $postadress
     */
    private $postadress = null;

    /**
     * @var string $postnr
     */
    private $postnr = null;

    /**
     * @var string $ort
     */
    private $ort = null;

    /**
     * @var string $land
     */
    private $land = null;

    /**
     * @var string $epost
     */
    private $epost = null;

    /**
     * @var string $hemsida
     */
    private $hemsida = null;

    /**
     * @var string $kontaktperson
     */
    private $kontaktperson = null;

    /**
     * @var string $personalansvarig
     */
    private $personalansvarig = null;

    /**
     * @var string $attestansvarig
     */
    private $attestansvarig = null;

    /**
     * @var string $telefon
     */
    private $telefon = null;

    /**
     * @var string $telefax
     */
    private $telefax = null;

    /**
     * @var string $programnamn
     */
    private $programnamn = null;

    /**
     * @var string $programlicens
     */
    private $programlicens = null;

    /**
     * @var string $info
     */
    private $info = null;

    /**
     * Gets as format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * @param string $format
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
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
     * Gets as nyexport
     *
     * @return \PAXml\NyexportTYPEType
     */
    public function getNyexport()
    {
        return $this->nyexport;
    }

    /**
     * Sets a new nyexport
     *
     * @param \PAXml\NyexportTYPEType $nyexport
     * @return self
     */
    public function setNyexport(\PAXml\NyexportTYPEType $nyexport)
    {
        $this->nyexport = $nyexport;
        return $this;
    }

    /**
     * Gets as foretagid
     *
     * @return string
     */
    public function getForetagid()
    {
        return $this->foretagid;
    }

    /**
     * Sets a new foretagid
     *
     * @param string $foretagid
     * @return self
     */
    public function setForetagid($foretagid)
    {
        $this->foretagid = $foretagid;
        return $this;
    }

    /**
     * Gets as foretagorgnr
     *
     * @return string
     */
    public function getForetagorgnr()
    {
        return $this->foretagorgnr;
    }

    /**
     * Sets a new foretagorgnr
     *
     * @param string $foretagorgnr
     * @return self
     */
    public function setForetagorgnr($foretagorgnr)
    {
        $this->foretagorgnr = $foretagorgnr;
        return $this;
    }

    /**
     * Gets as foretagnamn
     *
     * @return string
     */
    public function getForetagnamn()
    {
        return $this->foretagnamn;
    }

    /**
     * Sets a new foretagnamn
     *
     * @param string $foretagnamn
     * @return self
     */
    public function setForetagnamn($foretagnamn)
    {
        $this->foretagnamn = $foretagnamn;
        return $this;
    }

    /**
     * Gets as extraadress
     *
     * @return string
     */
    public function getExtraadress()
    {
        return $this->extraadress;
    }

    /**
     * Sets a new extraadress
     *
     * @param string $extraadress
     * @return self
     */
    public function setExtraadress($extraadress)
    {
        $this->extraadress = $extraadress;
        return $this;
    }

    /**
     * Gets as postadress
     *
     * @return string
     */
    public function getPostadress()
    {
        return $this->postadress;
    }

    /**
     * Sets a new postadress
     *
     * @param string $postadress
     * @return self
     */
    public function setPostadress($postadress)
    {
        $this->postadress = $postadress;
        return $this;
    }

    /**
     * Gets as postnr
     *
     * @return string
     */
    public function getPostnr()
    {
        return $this->postnr;
    }

    /**
     * Sets a new postnr
     *
     * @param string $postnr
     * @return self
     */
    public function setPostnr($postnr)
    {
        $this->postnr = $postnr;
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
     * Gets as land
     *
     * @return string
     */
    public function getLand()
    {
        return $this->land;
    }

    /**
     * Sets a new land
     *
     * @param string $land
     * @return self
     */
    public function setLand($land)
    {
        $this->land = $land;
        return $this;
    }

    /**
     * Gets as epost
     *
     * @return string
     */
    public function getEpost()
    {
        return $this->epost;
    }

    /**
     * Sets a new epost
     *
     * @param string $epost
     * @return self
     */
    public function setEpost($epost)
    {
        $this->epost = $epost;
        return $this;
    }

    /**
     * Gets as hemsida
     *
     * @return string
     */
    public function getHemsida()
    {
        return $this->hemsida;
    }

    /**
     * Sets a new hemsida
     *
     * @param string $hemsida
     * @return self
     */
    public function setHemsida($hemsida)
    {
        $this->hemsida = $hemsida;
        return $this;
    }

    /**
     * Gets as kontaktperson
     *
     * @return string
     */
    public function getKontaktperson()
    {
        return $this->kontaktperson;
    }

    /**
     * Sets a new kontaktperson
     *
     * @param string $kontaktperson
     * @return self
     */
    public function setKontaktperson($kontaktperson)
    {
        $this->kontaktperson = $kontaktperson;
        return $this;
    }

    /**
     * Gets as personalansvarig
     *
     * @return string
     */
    public function getPersonalansvarig()
    {
        return $this->personalansvarig;
    }

    /**
     * Sets a new personalansvarig
     *
     * @param string $personalansvarig
     * @return self
     */
    public function setPersonalansvarig($personalansvarig)
    {
        $this->personalansvarig = $personalansvarig;
        return $this;
    }

    /**
     * Gets as attestansvarig
     *
     * @return string
     */
    public function getAttestansvarig()
    {
        return $this->attestansvarig;
    }

    /**
     * Sets a new attestansvarig
     *
     * @param string $attestansvarig
     * @return self
     */
    public function setAttestansvarig($attestansvarig)
    {
        $this->attestansvarig = $attestansvarig;
        return $this;
    }

    /**
     * Gets as telefon
     *
     * @return string
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Sets a new telefon
     *
     * @param string $telefon
     * @return self
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;
        return $this;
    }

    /**
     * Gets as telefax
     *
     * @return string
     */
    public function getTelefax()
    {
        return $this->telefax;
    }

    /**
     * Sets a new telefax
     *
     * @param string $telefax
     * @return self
     */
    public function setTelefax($telefax)
    {
        $this->telefax = $telefax;
        return $this;
    }

    /**
     * Gets as programnamn
     *
     * @return string
     */
    public function getProgramnamn()
    {
        return $this->programnamn;
    }

    /**
     * Sets a new programnamn
     *
     * @param string $programnamn
     * @return self
     */
    public function setProgramnamn($programnamn)
    {
        $this->programnamn = $programnamn;
        return $this;
    }

    /**
     * Gets as programlicens
     *
     * @return string
     */
    public function getProgramlicens()
    {
        return $this->programlicens;
    }

    /**
     * Sets a new programlicens
     *
     * @param string $programlicens
     * @return self
     */
    public function setProgramlicens($programlicens)
    {
        $this->programlicens = $programlicens;
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

