<?php

namespace PAXml;

/**
 * Class representing IntAttribDatumBeloppType
 *
 *
 * XSD Type: intAttribDatumBelopp
 */
class IntAttribDatumBeloppType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * @var \DateTime $datum
     */
    private $datum = null;

    /**
     * Construct
     *
     * @param float $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param float $value
     * @return float
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


}

