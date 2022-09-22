<?php

namespace PAXml;

/**
 * Class representing SaldoTYPEType
 *
 *
 * XSD Type: saldoTYPE
 */
class SaldoTYPEType
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
     * @var \DateTime $datum
     */
    private $datum = null;

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

