<?php

namespace PAXml;

/**
 * Class representing SchemaTYPEType
 *
 *
 * XSD Type: schemaTYPE
 */
class SchemaTYPEType
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
     * @var \PAXml\DagTYPEType[] $dag
     */
    private $dag = [
        
    ];

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
     * Adds as dag
     *
     * @return self
     * @param \PAXml\DagTYPEType $dag
     */
    public function addToDag(\PAXml\DagTYPEType $dag)
    {
        $this->dag[] = $dag;
        return $this;
    }

    /**
     * isset dag
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDag($index)
    {
        return isset($this->dag[$index]);
    }

    /**
     * unset dag
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDag($index)
    {
        unset($this->dag[$index]);
    }

    /**
     * Gets as dag
     *
     * @return \PAXml\DagTYPEType[]
     */
    public function getDag()
    {
        return $this->dag;
    }

    /**
     * Sets a new dag
     *
     * @param \PAXml\DagTYPEType[] $dag
     * @return self
     */
    public function setDag(array $dag)
    {
        $this->dag = $dag;
        return $this;
    }


}

