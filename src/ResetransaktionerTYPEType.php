<?php

namespace PAXml;

/**
 * Class representing ResetransaktionerTYPEType
 *
 *
 * XSD Type: resetransaktionerTYPE
 */
class ResetransaktionerTYPEType
{

    /**
     * @var string $landskodstd
     */
    private $landskodstd = null;

    /**
     * @var \PAXml\ResetransTYPEType[] $resetrans
     */
    private $resetrans = [
        
    ];

    /**
     * Gets as landskodstd
     *
     * @return string
     */
    public function getLandskodstd()
    {
        return $this->landskodstd;
    }

    /**
     * Sets a new landskodstd
     *
     * @param string $landskodstd
     * @return self
     */
    public function setLandskodstd($landskodstd)
    {
        $this->landskodstd = $landskodstd;
        return $this;
    }

    /**
     * Adds as resetrans
     *
     * @return self
     * @param \PAXml\ResetransTYPEType $resetrans
     */
    public function addToResetrans(\PAXml\ResetransTYPEType $resetrans)
    {
        $this->resetrans[] = $resetrans;
        return $this;
    }

    /**
     * isset resetrans
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResetrans($index)
    {
        return isset($this->resetrans[$index]);
    }

    /**
     * unset resetrans
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResetrans($index)
    {
        unset($this->resetrans[$index]);
    }

    /**
     * Gets as resetrans
     *
     * @return \PAXml\ResetransTYPEType[]
     */
    public function getResetrans()
    {
        return $this->resetrans;
    }

    /**
     * Sets a new resetrans
     *
     * @param \PAXml\ResetransTYPEType[] $resetrans
     * @return self
     */
    public function setResetrans(array $resetrans)
    {
        $this->resetrans = $resetrans;
        return $this;
    }


}

