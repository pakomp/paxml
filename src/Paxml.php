<?php

namespace PAXml;

/**
 * Class representing Paxml
 */
class Paxml
{

    /**
     * @var \PAXml\HeaderTYPEType $header
     */
    private $header = null;

    /**
     * @var \PAXml\DimensionTYPEType[] $dimensioner
     */
    private $dimensioner = null;

    /**
     * @var \PAXml\ResultatenhetTYPEType[] $resultatenheter
     */
    private $resultatenheter = null;

    /**
     * @var \PAXml\KodTYPEType[] $koder
     */
    private $koder = null;

    /**
     * @var \PAXml\ResetransaktionerTYPEType $resetransaktioner
     */
    private $resetransaktioner = null;

    /**
     * @var \PAXml\TidtransaktionerTYPEType $tidtransaktioner
     */
    private $tidtransaktioner = null;

    /**
     * @var \PAXml\LonetransTYPEType[] $lonetransaktioner
     */
    private $lonetransaktioner = null;

    /**
     * @var \PAXml\SchemaTYPEType[] $schematransaktioner
     */
    private $schematransaktioner = null;

    /**
     * @var \PAXml\PersonTYPEType[] $personal
     */
    private $personal = null;

    /**
     * @var \PAXml\LonebeskedTYPEType[] $loneutbetalning
     */
    private $loneutbetalning = null;

    /**
     * @var \PAXml\SaldoTYPEType[] $saldon
     */
    private $saldon = null;

    /**
     * Gets as header
     *
     * @return \PAXml\HeaderTYPEType
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \PAXml\HeaderTYPEType $header
     * @return self
     */
    public function setHeader(\PAXml\HeaderTYPEType $header)
    {
        $this->header = $header;
        return $this;
    }

    /**
     * Adds as dimension
     *
     * @return self
     * @param \PAXml\DimensionTYPEType $dimension
     */
    public function addToDimensioner(\PAXml\DimensionTYPEType $dimension)
    {
        $this->dimensioner[] = $dimension;
        return $this;
    }

    /**
     * isset dimensioner
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDimensioner($index)
    {
        return isset($this->dimensioner[$index]);
    }

    /**
     * unset dimensioner
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDimensioner($index)
    {
        unset($this->dimensioner[$index]);
    }

    /**
     * Gets as dimensioner
     *
     * @return \PAXml\DimensionTYPEType[]
     */
    public function getDimensioner()
    {
        return $this->dimensioner;
    }

    /**
     * Sets a new dimensioner
     *
     * @param \PAXml\DimensionTYPEType[] $dimensioner
     * @return self
     */
    public function setDimensioner(array $dimensioner)
    {
        $this->dimensioner = $dimensioner;
        return $this;
    }

    /**
     * Adds as resultatenhet
     *
     * @return self
     * @param \PAXml\ResultatenhetTYPEType $resultatenhet
     */
    public function addToResultatenheter(\PAXml\ResultatenhetTYPEType $resultatenhet)
    {
        $this->resultatenheter[] = $resultatenhet;
        return $this;
    }

    /**
     * isset resultatenheter
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResultatenheter($index)
    {
        return isset($this->resultatenheter[$index]);
    }

    /**
     * unset resultatenheter
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResultatenheter($index)
    {
        unset($this->resultatenheter[$index]);
    }

    /**
     * Gets as resultatenheter
     *
     * @return \PAXml\ResultatenhetTYPEType[]
     */
    public function getResultatenheter()
    {
        return $this->resultatenheter;
    }

    /**
     * Sets a new resultatenheter
     *
     * @param \PAXml\ResultatenhetTYPEType[] $resultatenheter
     * @return self
     */
    public function setResultatenheter(array $resultatenheter)
    {
        $this->resultatenheter = $resultatenheter;
        return $this;
    }

    /**
     * Adds as kod
     *
     * @return self
     * @param \PAXml\KodTYPEType $kod
     */
    public function addToKoder(\PAXml\KodTYPEType $kod)
    {
        $this->koder[] = $kod;
        return $this;
    }

    /**
     * isset koder
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKoder($index)
    {
        return isset($this->koder[$index]);
    }

    /**
     * unset koder
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKoder($index)
    {
        unset($this->koder[$index]);
    }

    /**
     * Gets as koder
     *
     * @return \PAXml\KodTYPEType[]
     */
    public function getKoder()
    {
        return $this->koder;
    }

    /**
     * Sets a new koder
     *
     * @param \PAXml\KodTYPEType[] $koder
     * @return self
     */
    public function setKoder(array $koder)
    {
        $this->koder = $koder;
        return $this;
    }

    /**
     * Gets as resetransaktioner
     *
     * @return \PAXml\ResetransaktionerTYPEType
     */
    public function getResetransaktioner()
    {
        return $this->resetransaktioner;
    }

    /**
     * Sets a new resetransaktioner
     *
     * @param \PAXml\ResetransaktionerTYPEType $resetransaktioner
     * @return self
     */
    public function setResetransaktioner(\PAXml\ResetransaktionerTYPEType $resetransaktioner)
    {
        $this->resetransaktioner = $resetransaktioner;
        return $this;
    }

    /**
     * Gets as tidtransaktioner
     *
     * @return \PAXml\TidtransaktionerTYPEType
     */
    public function getTidtransaktioner()
    {
        return $this->tidtransaktioner;
    }

    /**
     * Sets a new tidtransaktioner
     *
     * @param \PAXml\TidtransaktionerTYPEType $tidtransaktioner
     * @return self
     */
    public function setTidtransaktioner(\PAXml\TidtransaktionerTYPEType $tidtransaktioner)
    {
        $this->tidtransaktioner = $tidtransaktioner;
        return $this;
    }

    /**
     * Adds as lonetrans
     *
     * @return self
     * @param \PAXml\LonetransTYPEType $lonetrans
     */
    public function addToLonetransaktioner(\PAXml\LonetransTYPEType $lonetrans)
    {
        $this->lonetransaktioner[] = $lonetrans;
        return $this;
    }

    /**
     * isset lonetransaktioner
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLonetransaktioner($index)
    {
        return isset($this->lonetransaktioner[$index]);
    }

    /**
     * unset lonetransaktioner
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLonetransaktioner($index)
    {
        unset($this->lonetransaktioner[$index]);
    }

    /**
     * Gets as lonetransaktioner
     *
     * @return \PAXml\LonetransTYPEType[]
     */
    public function getLonetransaktioner()
    {
        return $this->lonetransaktioner;
    }

    /**
     * Sets a new lonetransaktioner
     *
     * @param \PAXml\LonetransTYPEType[] $lonetransaktioner
     * @return self
     */
    public function setLonetransaktioner(array $lonetransaktioner)
    {
        $this->lonetransaktioner = $lonetransaktioner;
        return $this;
    }

    /**
     * Adds as schema
     *
     * @return self
     * @param \PAXml\SchemaTYPEType $schema
     */
    public function addToSchematransaktioner(\PAXml\SchemaTYPEType $schema)
    {
        $this->schematransaktioner[] = $schema;
        return $this;
    }

    /**
     * isset schematransaktioner
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSchematransaktioner($index)
    {
        return isset($this->schematransaktioner[$index]);
    }

    /**
     * unset schematransaktioner
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSchematransaktioner($index)
    {
        unset($this->schematransaktioner[$index]);
    }

    /**
     * Gets as schematransaktioner
     *
     * @return \PAXml\SchemaTYPEType[]
     */
    public function getSchematransaktioner()
    {
        return $this->schematransaktioner;
    }

    /**
     * Sets a new schematransaktioner
     *
     * @param \PAXml\SchemaTYPEType[] $schematransaktioner
     * @return self
     */
    public function setSchematransaktioner(array $schematransaktioner)
    {
        $this->schematransaktioner = $schematransaktioner;
        return $this;
    }

    /**
     * Adds as person
     *
     * @return self
     * @param \PAXml\PersonTYPEType $person
     */
    public function addToPersonal(\PAXml\PersonTYPEType $person)
    {
        $this->personal[] = $person;
        return $this;
    }

    /**
     * isset personal
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPersonal($index)
    {
        return isset($this->personal[$index]);
    }

    /**
     * unset personal
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPersonal($index)
    {
        unset($this->personal[$index]);
    }

    /**
     * Gets as personal
     *
     * @return \PAXml\PersonTYPEType[]
     */
    public function getPersonal()
    {
        return $this->personal;
    }

    /**
     * Sets a new personal
     *
     * @param \PAXml\PersonTYPEType[] $personal
     * @return self
     */
    public function setPersonal(array $personal)
    {
        $this->personal = $personal;
        return $this;
    }

    /**
     * Adds as lonebesked
     *
     * @return self
     * @param \PAXml\LonebeskedTYPEType $lonebesked
     */
    public function addToLoneutbetalning(\PAXml\LonebeskedTYPEType $lonebesked)
    {
        $this->loneutbetalning[] = $lonebesked;
        return $this;
    }

    /**
     * isset loneutbetalning
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLoneutbetalning($index)
    {
        return isset($this->loneutbetalning[$index]);
    }

    /**
     * unset loneutbetalning
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLoneutbetalning($index)
    {
        unset($this->loneutbetalning[$index]);
    }

    /**
     * Gets as loneutbetalning
     *
     * @return \PAXml\LonebeskedTYPEType[]
     */
    public function getLoneutbetalning()
    {
        return $this->loneutbetalning;
    }

    /**
     * Sets a new loneutbetalning
     *
     * @param \PAXml\LonebeskedTYPEType[] $loneutbetalning
     * @return self
     */
    public function setLoneutbetalning(array $loneutbetalning)
    {
        $this->loneutbetalning = $loneutbetalning;
        return $this;
    }

    /**
     * Adds as saldo
     *
     * @return self
     * @param \PAXml\SaldoTYPEType $saldo
     */
    public function addToSaldon(\PAXml\SaldoTYPEType $saldo)
    {
        $this->saldon[] = $saldo;
        return $this;
    }

    /**
     * isset saldon
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSaldon($index)
    {
        return isset($this->saldon[$index]);
    }

    /**
     * unset saldon
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSaldon($index)
    {
        unset($this->saldon[$index]);
    }

    /**
     * Gets as saldon
     *
     * @return \PAXml\SaldoTYPEType[]
     */
    public function getSaldon()
    {
        return $this->saldon;
    }

    /**
     * Sets a new saldon
     *
     * @param \PAXml\SaldoTYPEType[] $saldon
     * @return self
     */
    public function setSaldon(array $saldon)
    {
        $this->saldon = $saldon;
        return $this;
    }


}

