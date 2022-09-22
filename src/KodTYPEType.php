<?php

namespace PAXml;

/**
 * Class representing KodTYPEType
 *
 *
 * XSD Type: kodTYPE
 */
class KodTYPEType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $namn
     */
    private $namn = null;

    /**
     * @var string $info
     */
    private $info = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as namn
     *
     * @return string
     */
    public function getNamn()
    {
        return $this->namn;
    }

    /**
     * Sets a new namn
     *
     * @param string $namn
     * @return self
     */
    public function setNamn($namn)
    {
        $this->namn = $namn;
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

