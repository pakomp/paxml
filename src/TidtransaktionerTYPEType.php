<?php

namespace PAXml;

/**
 * Class representing TidtransaktionerTYPEType
 *
 *
 * XSD Type: tidtransaktionerTYPE
 */
class TidtransaktionerTYPEType
{

    /**
     * @var \PAXml\HandelseTYPEType[] $klar
     */
    private $klar = [
        
    ];

    /**
     * @var \PAXml\HandelseTYPEType[] $attesterat
     */
    private $attesterat = [
        
    ];

    /**
     * @var \PAXml\TidtransTYPEType[] $tidtrans
     */
    private $tidtrans = [
        
    ];

    /**
     * Adds as klar
     *
     * @return self
     * @param \PAXml\HandelseTYPEType $klar
     */
    public function addToKlar(\PAXml\HandelseTYPEType $klar)
    {
        $this->klar[] = $klar;
        return $this;
    }

    /**
     * isset klar
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKlar($index)
    {
        return isset($this->klar[$index]);
    }

    /**
     * unset klar
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKlar($index)
    {
        unset($this->klar[$index]);
    }

    /**
     * Gets as klar
     *
     * @return \PAXml\HandelseTYPEType[]
     */
    public function getKlar()
    {
        return $this->klar;
    }

    /**
     * Sets a new klar
     *
     * @param \PAXml\HandelseTYPEType[] $klar
     * @return self
     */
    public function setKlar(array $klar)
    {
        $this->klar = $klar;
        return $this;
    }

    /**
     * Adds as attesterat
     *
     * @return self
     * @param \PAXml\HandelseTYPEType $attesterat
     */
    public function addToAttesterat(\PAXml\HandelseTYPEType $attesterat)
    {
        $this->attesterat[] = $attesterat;
        return $this;
    }

    /**
     * isset attesterat
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttesterat($index)
    {
        return isset($this->attesterat[$index]);
    }

    /**
     * unset attesterat
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttesterat($index)
    {
        unset($this->attesterat[$index]);
    }

    /**
     * Gets as attesterat
     *
     * @return \PAXml\HandelseTYPEType[]
     */
    public function getAttesterat()
    {
        return $this->attesterat;
    }

    /**
     * Sets a new attesterat
     *
     * @param \PAXml\HandelseTYPEType[] $attesterat
     * @return self
     */
    public function setAttesterat(array $attesterat)
    {
        $this->attesterat = $attesterat;
        return $this;
    }

    /**
     * Adds as tidtrans
     *
     * @return self
     * @param \PAXml\TidtransTYPEType $tidtrans
     */
    public function addToTidtrans(\PAXml\TidtransTYPEType $tidtrans)
    {
        $this->tidtrans[] = $tidtrans;
        return $this;
    }

    /**
     * isset tidtrans
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTidtrans($index)
    {
        return isset($this->tidtrans[$index]);
    }

    /**
     * unset tidtrans
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTidtrans($index)
    {
        unset($this->tidtrans[$index]);
    }

    /**
     * Gets as tidtrans
     *
     * @return \PAXml\TidtransTYPEType[]
     */
    public function getTidtrans()
    {
        return $this->tidtrans;
    }

    /**
     * Sets a new tidtrans
     *
     * @param \PAXml\TidtransTYPEType[] $tidtrans
     * @return self
     */
    public function setTidtrans(array $tidtrans)
    {
        $this->tidtrans = $tidtrans;
        return $this;
    }


}

