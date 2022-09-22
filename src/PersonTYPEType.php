<?php

namespace PAXml;

/**
 * Class representing PersonTYPEType
 *
 *
 * XSD Type: personTYPE
 */
class PersonTYPEType
{

    /**
     * @var string $anstid
     */
    private $anstid = null;

    /**
     * @var string $persnr
     */
    private $persnr = null;

    /**
     * @var bool $delete
     */
    private $delete = null;

    /**
     * @var string $fornamn
     */
    private $fornamn = null;

    /**
     * @var string $efternamn
     */
    private $efternamn = null;

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
     * @var string $mobiltelefon
     */
    private $mobiltelefon = null;

    /**
     * @var string $hemtelefon
     */
    private $hemtelefon = null;

    /**
     * @var string $arbetstelefon
     */
    private $arbetstelefon = null;

    /**
     * @var string $epostarb
     */
    private $epostarb = null;

    /**
     * @var string $eposthem
     */
    private $eposthem = null;

    /**
     * @var string $personaltyp
     */
    private $personaltyp = null;

    /**
     * @var string $kategori
     */
    private $kategori = null;

    /**
     * @var string $befattning
     */
    private $befattning = null;

    /**
     * @var string $befattningskod
     */
    private $befattningskod = null;

    /**
     * @var string $anstform
     */
    private $anstform = null;

    /**
     * @var string $semesteravtal
     */
    private $semesteravtal = null;

    /**
     * @var string $bankclearing
     */
    private $bankclearing = null;

    /**
     * @var string $bankkonto
     */
    private $bankkonto = null;

    /**
     * @var \DateTime $anstdatum
     */
    private $anstdatum = null;

    /**
     * @var \DateTime $avgdatum
     */
    private $avgdatum = null;

    /**
     * @var string $lonform
     */
    private $lonform = null;

    /**
     * @var bool $innevarande
     */
    private $innevarande = null;

    /**
     * @var \PAXml\IntAttribDatumBeloppType $timlon
     */
    private $timlon = null;

    /**
     * @var \PAXml\IntAttribDatumBeloppType $manlon
     */
    private $manlon = null;

    /**
     * @var \PAXml\FribeloppTYPEType[] $personbelopp
     */
    private $personbelopp = null;

    /**
     * @var \PAXml\FritextTYPEType[] $persontexter
     */
    private $persontexter = null;

    /**
     * @var \PAXml\IntAttribDatumBeloppType $sysgrad
     */
    private $sysgrad = null;

    /**
     * @var float $semesterdagar
     */
    private $semesterdagar = null;

    /**
     * @var float $skattetabell
     */
    private $skattetabell = null;

    /**
     * @var int $skattekolumn
     */
    private $skattekolumn = null;

    /**
     * @var \PAXml\JamkningTYPEType $skattejamkning
     */
    private $skattejamkning = null;

    /**
     * @var \PAXml\UtmatningTYPEType $loneutmatning
     */
    private $loneutmatning = null;

    /**
     * @var \PAXml\ResenhetTYPEType[] $resenheter
     */
    private $resenheter = null;

    /**
     * @var string $info
     */
    private $info = null;

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
     * Gets as delete
     *
     * @return bool
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * Sets a new delete
     *
     * @param bool $delete
     * @return self
     */
    public function setDelete($delete)
    {
        $this->delete = $delete;
        return $this;
    }

    /**
     * Gets as fornamn
     *
     * @return string
     */
    public function getFornamn()
    {
        return $this->fornamn;
    }

    /**
     * Sets a new fornamn
     *
     * @param string $fornamn
     * @return self
     */
    public function setFornamn($fornamn)
    {
        $this->fornamn = $fornamn;
        return $this;
    }

    /**
     * Gets as efternamn
     *
     * @return string
     */
    public function getEfternamn()
    {
        return $this->efternamn;
    }

    /**
     * Sets a new efternamn
     *
     * @param string $efternamn
     * @return self
     */
    public function setEfternamn($efternamn)
    {
        $this->efternamn = $efternamn;
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
     * Gets as mobiltelefon
     *
     * @return string
     */
    public function getMobiltelefon()
    {
        return $this->mobiltelefon;
    }

    /**
     * Sets a new mobiltelefon
     *
     * @param string $mobiltelefon
     * @return self
     */
    public function setMobiltelefon($mobiltelefon)
    {
        $this->mobiltelefon = $mobiltelefon;
        return $this;
    }

    /**
     * Gets as hemtelefon
     *
     * @return string
     */
    public function getHemtelefon()
    {
        return $this->hemtelefon;
    }

    /**
     * Sets a new hemtelefon
     *
     * @param string $hemtelefon
     * @return self
     */
    public function setHemtelefon($hemtelefon)
    {
        $this->hemtelefon = $hemtelefon;
        return $this;
    }

    /**
     * Gets as arbetstelefon
     *
     * @return string
     */
    public function getArbetstelefon()
    {
        return $this->arbetstelefon;
    }

    /**
     * Sets a new arbetstelefon
     *
     * @param string $arbetstelefon
     * @return self
     */
    public function setArbetstelefon($arbetstelefon)
    {
        $this->arbetstelefon = $arbetstelefon;
        return $this;
    }

    /**
     * Gets as epostarb
     *
     * @return string
     */
    public function getEpostarb()
    {
        return $this->epostarb;
    }

    /**
     * Sets a new epostarb
     *
     * @param string $epostarb
     * @return self
     */
    public function setEpostarb($epostarb)
    {
        $this->epostarb = $epostarb;
        return $this;
    }

    /**
     * Gets as eposthem
     *
     * @return string
     */
    public function getEposthem()
    {
        return $this->eposthem;
    }

    /**
     * Sets a new eposthem
     *
     * @param string $eposthem
     * @return self
     */
    public function setEposthem($eposthem)
    {
        $this->eposthem = $eposthem;
        return $this;
    }

    /**
     * Gets as personaltyp
     *
     * @return string
     */
    public function getPersonaltyp()
    {
        return $this->personaltyp;
    }

    /**
     * Sets a new personaltyp
     *
     * @param string $personaltyp
     * @return self
     */
    public function setPersonaltyp($personaltyp)
    {
        $this->personaltyp = $personaltyp;
        return $this;
    }

    /**
     * Gets as kategori
     *
     * @return string
     */
    public function getKategori()
    {
        return $this->kategori;
    }

    /**
     * Sets a new kategori
     *
     * @param string $kategori
     * @return self
     */
    public function setKategori($kategori)
    {
        $this->kategori = $kategori;
        return $this;
    }

    /**
     * Gets as befattning
     *
     * @return string
     */
    public function getBefattning()
    {
        return $this->befattning;
    }

    /**
     * Sets a new befattning
     *
     * @param string $befattning
     * @return self
     */
    public function setBefattning($befattning)
    {
        $this->befattning = $befattning;
        return $this;
    }

    /**
     * Gets as befattningskod
     *
     * @return string
     */
    public function getBefattningskod()
    {
        return $this->befattningskod;
    }

    /**
     * Sets a new befattningskod
     *
     * @param string $befattningskod
     * @return self
     */
    public function setBefattningskod($befattningskod)
    {
        $this->befattningskod = $befattningskod;
        return $this;
    }

    /**
     * Gets as anstform
     *
     * @return string
     */
    public function getAnstform()
    {
        return $this->anstform;
    }

    /**
     * Sets a new anstform
     *
     * @param string $anstform
     * @return self
     */
    public function setAnstform($anstform)
    {
        $this->anstform = $anstform;
        return $this;
    }

    /**
     * Gets as semesteravtal
     *
     * @return string
     */
    public function getSemesteravtal()
    {
        return $this->semesteravtal;
    }

    /**
     * Sets a new semesteravtal
     *
     * @param string $semesteravtal
     * @return self
     */
    public function setSemesteravtal($semesteravtal)
    {
        $this->semesteravtal = $semesteravtal;
        return $this;
    }

    /**
     * Gets as bankclearing
     *
     * @return string
     */
    public function getBankclearing()
    {
        return $this->bankclearing;
    }

    /**
     * Sets a new bankclearing
     *
     * @param string $bankclearing
     * @return self
     */
    public function setBankclearing($bankclearing)
    {
        $this->bankclearing = $bankclearing;
        return $this;
    }

    /**
     * Gets as bankkonto
     *
     * @return string
     */
    public function getBankkonto()
    {
        return $this->bankkonto;
    }

    /**
     * Sets a new bankkonto
     *
     * @param string $bankkonto
     * @return self
     */
    public function setBankkonto($bankkonto)
    {
        $this->bankkonto = $bankkonto;
        return $this;
    }

    /**
     * Gets as anstdatum
     *
     * @return \DateTime
     */
    public function getAnstdatum()
    {
        return $this->anstdatum;
    }

    /**
     * Sets a new anstdatum
     *
     * @param \DateTime $anstdatum
     * @return self
     */
    public function setAnstdatum(\DateTime $anstdatum)
    {
        $this->anstdatum = $anstdatum;
        return $this;
    }

    /**
     * Gets as avgdatum
     *
     * @return \DateTime
     */
    public function getAvgdatum()
    {
        return $this->avgdatum;
    }

    /**
     * Sets a new avgdatum
     *
     * @param \DateTime $avgdatum
     * @return self
     */
    public function setAvgdatum(\DateTime $avgdatum)
    {
        $this->avgdatum = $avgdatum;
        return $this;
    }

    /**
     * Gets as lonform
     *
     * @return string
     */
    public function getLonform()
    {
        return $this->lonform;
    }

    /**
     * Sets a new lonform
     *
     * @param string $lonform
     * @return self
     */
    public function setLonform($lonform)
    {
        $this->lonform = $lonform;
        return $this;
    }

    /**
     * Gets as innevarande
     *
     * @return bool
     */
    public function getInnevarande()
    {
        return $this->innevarande;
    }

    /**
     * Sets a new innevarande
     *
     * @param bool $innevarande
     * @return self
     */
    public function setInnevarande($innevarande)
    {
        $this->innevarande = $innevarande;
        return $this;
    }

    /**
     * Gets as timlon
     *
     * @return \PAXml\IntAttribDatumBeloppType
     */
    public function getTimlon()
    {
        return $this->timlon;
    }

    /**
     * Sets a new timlon
     *
     * @param \PAXml\IntAttribDatumBeloppType $timlon
     * @return self
     */
    public function setTimlon(\PAXml\IntAttribDatumBeloppType $timlon)
    {
        $this->timlon = $timlon;
        return $this;
    }

    /**
     * Gets as manlon
     *
     * @return \PAXml\IntAttribDatumBeloppType
     */
    public function getManlon()
    {
        return $this->manlon;
    }

    /**
     * Sets a new manlon
     *
     * @param \PAXml\IntAttribDatumBeloppType $manlon
     * @return self
     */
    public function setManlon(\PAXml\IntAttribDatumBeloppType $manlon)
    {
        $this->manlon = $manlon;
        return $this;
    }

    /**
     * Adds as belopp
     *
     * @return self
     * @param \PAXml\FribeloppTYPEType $belopp
     */
    public function addToPersonbelopp(\PAXml\FribeloppTYPEType $belopp)
    {
        $this->personbelopp[] = $belopp;
        return $this;
    }

    /**
     * isset personbelopp
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPersonbelopp($index)
    {
        return isset($this->personbelopp[$index]);
    }

    /**
     * unset personbelopp
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPersonbelopp($index)
    {
        unset($this->personbelopp[$index]);
    }

    /**
     * Gets as personbelopp
     *
     * @return \PAXml\FribeloppTYPEType[]
     */
    public function getPersonbelopp()
    {
        return $this->personbelopp;
    }

    /**
     * Sets a new personbelopp
     *
     * @param \PAXml\FribeloppTYPEType[] $personbelopp
     * @return self
     */
    public function setPersonbelopp(array $personbelopp)
    {
        $this->personbelopp = $personbelopp;
        return $this;
    }

    /**
     * Adds as text
     *
     * @return self
     * @param \PAXml\FritextTYPEType $text
     */
    public function addToPersontexter(\PAXml\FritextTYPEType $text)
    {
        $this->persontexter[] = $text;
        return $this;
    }

    /**
     * isset persontexter
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPersontexter($index)
    {
        return isset($this->persontexter[$index]);
    }

    /**
     * unset persontexter
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPersontexter($index)
    {
        unset($this->persontexter[$index]);
    }

    /**
     * Gets as persontexter
     *
     * @return \PAXml\FritextTYPEType[]
     */
    public function getPersontexter()
    {
        return $this->persontexter;
    }

    /**
     * Sets a new persontexter
     *
     * @param \PAXml\FritextTYPEType[] $persontexter
     * @return self
     */
    public function setPersontexter(array $persontexter)
    {
        $this->persontexter = $persontexter;
        return $this;
    }

    /**
     * Gets as sysgrad
     *
     * @return \PAXml\IntAttribDatumBeloppType
     */
    public function getSysgrad()
    {
        return $this->sysgrad;
    }

    /**
     * Sets a new sysgrad
     *
     * @param \PAXml\IntAttribDatumBeloppType $sysgrad
     * @return self
     */
    public function setSysgrad(\PAXml\IntAttribDatumBeloppType $sysgrad)
    {
        $this->sysgrad = $sysgrad;
        return $this;
    }

    /**
     * Gets as semesterdagar
     *
     * @return float
     */
    public function getSemesterdagar()
    {
        return $this->semesterdagar;
    }

    /**
     * Sets a new semesterdagar
     *
     * @param float $semesterdagar
     * @return self
     */
    public function setSemesterdagar($semesterdagar)
    {
        $this->semesterdagar = $semesterdagar;
        return $this;
    }

    /**
     * Gets as skattetabell
     *
     * @return float
     */
    public function getSkattetabell()
    {
        return $this->skattetabell;
    }

    /**
     * Sets a new skattetabell
     *
     * @param float $skattetabell
     * @return self
     */
    public function setSkattetabell($skattetabell)
    {
        $this->skattetabell = $skattetabell;
        return $this;
    }

    /**
     * Gets as skattekolumn
     *
     * @return int
     */
    public function getSkattekolumn()
    {
        return $this->skattekolumn;
    }

    /**
     * Sets a new skattekolumn
     *
     * @param int $skattekolumn
     * @return self
     */
    public function setSkattekolumn($skattekolumn)
    {
        $this->skattekolumn = $skattekolumn;
        return $this;
    }

    /**
     * Gets as skattejamkning
     *
     * @return \PAXml\JamkningTYPEType
     */
    public function getSkattejamkning()
    {
        return $this->skattejamkning;
    }

    /**
     * Sets a new skattejamkning
     *
     * @param \PAXml\JamkningTYPEType $skattejamkning
     * @return self
     */
    public function setSkattejamkning(\PAXml\JamkningTYPEType $skattejamkning)
    {
        $this->skattejamkning = $skattejamkning;
        return $this;
    }

    /**
     * Gets as loneutmatning
     *
     * @return \PAXml\UtmatningTYPEType
     */
    public function getLoneutmatning()
    {
        return $this->loneutmatning;
    }

    /**
     * Sets a new loneutmatning
     *
     * @param \PAXml\UtmatningTYPEType $loneutmatning
     * @return self
     */
    public function setLoneutmatning(\PAXml\UtmatningTYPEType $loneutmatning)
    {
        $this->loneutmatning = $loneutmatning;
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

