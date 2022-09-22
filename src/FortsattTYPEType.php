<?php

namespace PAXml;

/**
 * Class representing FortsattTYPEType
 *
 *
 * XSD Type: fortsattTYPE
 */
class FortsattTYPEType
{

    /**
     * @var bool $__value
     */
    private $__value = null;

    /**
     * @var int $dagnr
     */
    private $dagnr = null;

    /**
     * Construct
     *
     * @param bool $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param bool $value
     * @return bool
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as dagnr
     *
     * @return int
     */
    public function getDagnr()
    {
        return $this->dagnr;
    }

    /**
     * Sets a new dagnr
     *
     * @param int $dagnr
     * @return self
     */
    public function setDagnr($dagnr)
    {
        $this->dagnr = $dagnr;
        return $this;
    }


}

