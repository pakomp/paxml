<?php

namespace PAXml;

/**
 * Class representing LonebeskedTYPEType
 *
 *
 * XSD Type: lonebeskedTYPE
 */
class LonebeskedTYPEType
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
     * @var string $periodid
     */
    private $periodid = null;

    /**
     * @var string $periodtext
     */
    private $periodtext = null;

    /**
     * @var \DateTime $betaldatum
     */
    private $betaldatum = null;

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
     * @var string $clearingnr
     */
    private $clearingnr = null;

    /**
     * @var string $bankkonto
     */
    private $bankkonto = null;

    /**
     * @var float $skattprocent
     */
    private $skattprocent = null;

    /**
     * @var int $skattetabell
     */
    private $skattetabell = null;

    /**
     * @var float $jamkningprc
     */
    private $jamkningprc = null;

    /**
     * @var float $jamkningbel
     */
    private $jamkningbel = null;

    /**
     * @var int $skattekolumn
     */
    private $skattekolumn = null;

    /**
     * @var float $tabellskatt
     */
    private $tabellskatt = null;

    /**
     * @var float $engangsskatt
     */
    private $engangsskatt = null;

    /**
     * @var float $kapitalskatt
     */
    private $kapitalskatt = null;

    /**
     * @var float $extraskatt
     */
    private $extraskatt = null;

    /**
     * @var float $utbetalt
     */
    private $utbetalt = null;

    /**
     * @var float $arbavgiftprc
     */
    private $arbavgiftprc = null;

    /**
     * @var float $arbavgiftbel
     */
    private $arbavgiftbel = null;

    /**
     * @var \PAXml\LonradTYPEType[] $lonerader
     */
    private $lonerader = null;

    /**
     * @var float $ackbruttolon
     */
    private $ackbruttolon = null;

    /**
     * @var float $ackprelskatt
     */
    private $ackprelskatt = null;

    /**
     * @var float $acknettolon
     */
    private $acknettolon = null;

    /**
     * @var float $flexsaldo
     */
    private $flexsaldo = null;

    /**
     * @var float $kompsaldo
     */
    private $kompsaldo = null;

    /**
     * @var float $tidbanktim
     */
    private $tidbanktim = null;

    /**
     * @var float $tidbankbel
     */
    private $tidbankbel = null;

    /**
     * @var float $sembettot
     */
    private $sembettot = null;

    /**
     * @var float $sembetutb
     */
    private $sembetutb = null;

    /**
     * @var float $semobetot
     */
    private $semobetot = null;

    /**
     * @var float $semobeutb
     */
    private $semobeutb = null;

    /**
     * @var float $semfortot
     */
    private $semfortot = null;

    /**
     * @var float $semforutb
     */
    private $semforutb = null;

    /**
     * @var float $semspatot
     */
    private $semspatot = null;

    /**
     * @var float $semspautb
     */
    private $semspautb = null;

    /**
     * @var float $semlontot
     */
    private $semlontot = null;

    /**
     * @var float $semlonutb
     */
    private $semlonutb = null;

    /**
     * @var \PAXml\TransaktionTYPEType[] $kontering
     */
    private $kontering = null;

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
     * Gets as periodid
     *
     * @return string
     */
    public function getPeriodid()
    {
        return $this->periodid;
    }

    /**
     * Sets a new periodid
     *
     * @param string $periodid
     * @return self
     */
    public function setPeriodid($periodid)
    {
        $this->periodid = $periodid;
        return $this;
    }

    /**
     * Gets as periodtext
     *
     * @return string
     */
    public function getPeriodtext()
    {
        return $this->periodtext;
    }

    /**
     * Sets a new periodtext
     *
     * @param string $periodtext
     * @return self
     */
    public function setPeriodtext($periodtext)
    {
        $this->periodtext = $periodtext;
        return $this;
    }

    /**
     * Gets as betaldatum
     *
     * @return \DateTime
     */
    public function getBetaldatum()
    {
        return $this->betaldatum;
    }

    /**
     * Sets a new betaldatum
     *
     * @param \DateTime $betaldatum
     * @return self
     */
    public function setBetaldatum(\DateTime $betaldatum)
    {
        $this->betaldatum = $betaldatum;
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
     * Gets as clearingnr
     *
     * @return string
     */
    public function getClearingnr()
    {
        return $this->clearingnr;
    }

    /**
     * Sets a new clearingnr
     *
     * @param string $clearingnr
     * @return self
     */
    public function setClearingnr($clearingnr)
    {
        $this->clearingnr = $clearingnr;
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
     * Gets as skattetabell
     *
     * @return int
     */
    public function getSkattetabell()
    {
        return $this->skattetabell;
    }

    /**
     * Sets a new skattetabell
     *
     * @param int $skattetabell
     * @return self
     */
    public function setSkattetabell($skattetabell)
    {
        $this->skattetabell = $skattetabell;
        return $this;
    }

    /**
     * Gets as jamkningprc
     *
     * @return float
     */
    public function getJamkningprc()
    {
        return $this->jamkningprc;
    }

    /**
     * Sets a new jamkningprc
     *
     * @param float $jamkningprc
     * @return self
     */
    public function setJamkningprc($jamkningprc)
    {
        $this->jamkningprc = $jamkningprc;
        return $this;
    }

    /**
     * Gets as jamkningbel
     *
     * @return float
     */
    public function getJamkningbel()
    {
        return $this->jamkningbel;
    }

    /**
     * Sets a new jamkningbel
     *
     * @param float $jamkningbel
     * @return self
     */
    public function setJamkningbel($jamkningbel)
    {
        $this->jamkningbel = $jamkningbel;
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
     * Gets as tabellskatt
     *
     * @return float
     */
    public function getTabellskatt()
    {
        return $this->tabellskatt;
    }

    /**
     * Sets a new tabellskatt
     *
     * @param float $tabellskatt
     * @return self
     */
    public function setTabellskatt($tabellskatt)
    {
        $this->tabellskatt = $tabellskatt;
        return $this;
    }

    /**
     * Gets as engangsskatt
     *
     * @return float
     */
    public function getEngangsskatt()
    {
        return $this->engangsskatt;
    }

    /**
     * Sets a new engangsskatt
     *
     * @param float $engangsskatt
     * @return self
     */
    public function setEngangsskatt($engangsskatt)
    {
        $this->engangsskatt = $engangsskatt;
        return $this;
    }

    /**
     * Gets as kapitalskatt
     *
     * @return float
     */
    public function getKapitalskatt()
    {
        return $this->kapitalskatt;
    }

    /**
     * Sets a new kapitalskatt
     *
     * @param float $kapitalskatt
     * @return self
     */
    public function setKapitalskatt($kapitalskatt)
    {
        $this->kapitalskatt = $kapitalskatt;
        return $this;
    }

    /**
     * Gets as extraskatt
     *
     * @return float
     */
    public function getExtraskatt()
    {
        return $this->extraskatt;
    }

    /**
     * Sets a new extraskatt
     *
     * @param float $extraskatt
     * @return self
     */
    public function setExtraskatt($extraskatt)
    {
        $this->extraskatt = $extraskatt;
        return $this;
    }

    /**
     * Gets as utbetalt
     *
     * @return float
     */
    public function getUtbetalt()
    {
        return $this->utbetalt;
    }

    /**
     * Sets a new utbetalt
     *
     * @param float $utbetalt
     * @return self
     */
    public function setUtbetalt($utbetalt)
    {
        $this->utbetalt = $utbetalt;
        return $this;
    }

    /**
     * Gets as arbavgiftprc
     *
     * @return float
     */
    public function getArbavgiftprc()
    {
        return $this->arbavgiftprc;
    }

    /**
     * Sets a new arbavgiftprc
     *
     * @param float $arbavgiftprc
     * @return self
     */
    public function setArbavgiftprc($arbavgiftprc)
    {
        $this->arbavgiftprc = $arbavgiftprc;
        return $this;
    }

    /**
     * Gets as arbavgiftbel
     *
     * @return float
     */
    public function getArbavgiftbel()
    {
        return $this->arbavgiftbel;
    }

    /**
     * Sets a new arbavgiftbel
     *
     * @param float $arbavgiftbel
     * @return self
     */
    public function setArbavgiftbel($arbavgiftbel)
    {
        $this->arbavgiftbel = $arbavgiftbel;
        return $this;
    }

    /**
     * Adds as lonrad
     *
     * @return self
     * @param \PAXml\LonradTYPEType $lonrad
     */
    public function addToLonerader(\PAXml\LonradTYPEType $lonrad)
    {
        $this->lonerader[] = $lonrad;
        return $this;
    }

    /**
     * isset lonerader
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLonerader($index)
    {
        return isset($this->lonerader[$index]);
    }

    /**
     * unset lonerader
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLonerader($index)
    {
        unset($this->lonerader[$index]);
    }

    /**
     * Gets as lonerader
     *
     * @return \PAXml\LonradTYPEType[]
     */
    public function getLonerader()
    {
        return $this->lonerader;
    }

    /**
     * Sets a new lonerader
     *
     * @param \PAXml\LonradTYPEType[] $lonerader
     * @return self
     */
    public function setLonerader(array $lonerader)
    {
        $this->lonerader = $lonerader;
        return $this;
    }

    /**
     * Gets as ackbruttolon
     *
     * @return float
     */
    public function getAckbruttolon()
    {
        return $this->ackbruttolon;
    }

    /**
     * Sets a new ackbruttolon
     *
     * @param float $ackbruttolon
     * @return self
     */
    public function setAckbruttolon($ackbruttolon)
    {
        $this->ackbruttolon = $ackbruttolon;
        return $this;
    }

    /**
     * Gets as ackprelskatt
     *
     * @return float
     */
    public function getAckprelskatt()
    {
        return $this->ackprelskatt;
    }

    /**
     * Sets a new ackprelskatt
     *
     * @param float $ackprelskatt
     * @return self
     */
    public function setAckprelskatt($ackprelskatt)
    {
        $this->ackprelskatt = $ackprelskatt;
        return $this;
    }

    /**
     * Gets as acknettolon
     *
     * @return float
     */
    public function getAcknettolon()
    {
        return $this->acknettolon;
    }

    /**
     * Sets a new acknettolon
     *
     * @param float $acknettolon
     * @return self
     */
    public function setAcknettolon($acknettolon)
    {
        $this->acknettolon = $acknettolon;
        return $this;
    }

    /**
     * Gets as flexsaldo
     *
     * @return float
     */
    public function getFlexsaldo()
    {
        return $this->flexsaldo;
    }

    /**
     * Sets a new flexsaldo
     *
     * @param float $flexsaldo
     * @return self
     */
    public function setFlexsaldo($flexsaldo)
    {
        $this->flexsaldo = $flexsaldo;
        return $this;
    }

    /**
     * Gets as kompsaldo
     *
     * @return float
     */
    public function getKompsaldo()
    {
        return $this->kompsaldo;
    }

    /**
     * Sets a new kompsaldo
     *
     * @param float $kompsaldo
     * @return self
     */
    public function setKompsaldo($kompsaldo)
    {
        $this->kompsaldo = $kompsaldo;
        return $this;
    }

    /**
     * Gets as tidbanktim
     *
     * @return float
     */
    public function getTidbanktim()
    {
        return $this->tidbanktim;
    }

    /**
     * Sets a new tidbanktim
     *
     * @param float $tidbanktim
     * @return self
     */
    public function setTidbanktim($tidbanktim)
    {
        $this->tidbanktim = $tidbanktim;
        return $this;
    }

    /**
     * Gets as tidbankbel
     *
     * @return float
     */
    public function getTidbankbel()
    {
        return $this->tidbankbel;
    }

    /**
     * Sets a new tidbankbel
     *
     * @param float $tidbankbel
     * @return self
     */
    public function setTidbankbel($tidbankbel)
    {
        $this->tidbankbel = $tidbankbel;
        return $this;
    }

    /**
     * Gets as sembettot
     *
     * @return float
     */
    public function getSembettot()
    {
        return $this->sembettot;
    }

    /**
     * Sets a new sembettot
     *
     * @param float $sembettot
     * @return self
     */
    public function setSembettot($sembettot)
    {
        $this->sembettot = $sembettot;
        return $this;
    }

    /**
     * Gets as sembetutb
     *
     * @return float
     */
    public function getSembetutb()
    {
        return $this->sembetutb;
    }

    /**
     * Sets a new sembetutb
     *
     * @param float $sembetutb
     * @return self
     */
    public function setSembetutb($sembetutb)
    {
        $this->sembetutb = $sembetutb;
        return $this;
    }

    /**
     * Gets as semobetot
     *
     * @return float
     */
    public function getSemobetot()
    {
        return $this->semobetot;
    }

    /**
     * Sets a new semobetot
     *
     * @param float $semobetot
     * @return self
     */
    public function setSemobetot($semobetot)
    {
        $this->semobetot = $semobetot;
        return $this;
    }

    /**
     * Gets as semobeutb
     *
     * @return float
     */
    public function getSemobeutb()
    {
        return $this->semobeutb;
    }

    /**
     * Sets a new semobeutb
     *
     * @param float $semobeutb
     * @return self
     */
    public function setSemobeutb($semobeutb)
    {
        $this->semobeutb = $semobeutb;
        return $this;
    }

    /**
     * Gets as semfortot
     *
     * @return float
     */
    public function getSemfortot()
    {
        return $this->semfortot;
    }

    /**
     * Sets a new semfortot
     *
     * @param float $semfortot
     * @return self
     */
    public function setSemfortot($semfortot)
    {
        $this->semfortot = $semfortot;
        return $this;
    }

    /**
     * Gets as semforutb
     *
     * @return float
     */
    public function getSemforutb()
    {
        return $this->semforutb;
    }

    /**
     * Sets a new semforutb
     *
     * @param float $semforutb
     * @return self
     */
    public function setSemforutb($semforutb)
    {
        $this->semforutb = $semforutb;
        return $this;
    }

    /**
     * Gets as semspatot
     *
     * @return float
     */
    public function getSemspatot()
    {
        return $this->semspatot;
    }

    /**
     * Sets a new semspatot
     *
     * @param float $semspatot
     * @return self
     */
    public function setSemspatot($semspatot)
    {
        $this->semspatot = $semspatot;
        return $this;
    }

    /**
     * Gets as semspautb
     *
     * @return float
     */
    public function getSemspautb()
    {
        return $this->semspautb;
    }

    /**
     * Sets a new semspautb
     *
     * @param float $semspautb
     * @return self
     */
    public function setSemspautb($semspautb)
    {
        $this->semspautb = $semspautb;
        return $this;
    }

    /**
     * Gets as semlontot
     *
     * @return float
     */
    public function getSemlontot()
    {
        return $this->semlontot;
    }

    /**
     * Sets a new semlontot
     *
     * @param float $semlontot
     * @return self
     */
    public function setSemlontot($semlontot)
    {
        $this->semlontot = $semlontot;
        return $this;
    }

    /**
     * Gets as semlonutb
     *
     * @return float
     */
    public function getSemlonutb()
    {
        return $this->semlonutb;
    }

    /**
     * Sets a new semlonutb
     *
     * @param float $semlonutb
     * @return self
     */
    public function setSemlonutb($semlonutb)
    {
        $this->semlonutb = $semlonutb;
        return $this;
    }

    /**
     * Adds as transaktion
     *
     * @return self
     * @param \PAXml\TransaktionTYPEType $transaktion
     */
    public function addToKontering(\PAXml\TransaktionTYPEType $transaktion)
    {
        $this->kontering[] = $transaktion;
        return $this;
    }

    /**
     * isset kontering
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKontering($index)
    {
        return isset($this->kontering[$index]);
    }

    /**
     * unset kontering
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKontering($index)
    {
        unset($this->kontering[$index]);
    }

    /**
     * Gets as kontering
     *
     * @return \PAXml\TransaktionTYPEType[]
     */
    public function getKontering()
    {
        return $this->kontering;
    }

    /**
     * Sets a new kontering
     *
     * @param \PAXml\TransaktionTYPEType[] $kontering
     * @return self
     */
    public function setKontering(array $kontering)
    {
        $this->kontering = $kontering;
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

