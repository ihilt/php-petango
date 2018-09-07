<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for foundSearchResponse StructType
 * @subpackage Structs
 */
class FoundSearchResponse extends AbstractStructBase
{
    /**
     * The foundSearchResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfXmlNode
     */
    public $foundSearchResult;
    /**
     * Constructor method for foundSearchResponse
     * @uses FoundSearchResponse::setFoundSearchResult()
     * @param \ArrayType\ArrayOfXmlNode $foundSearchResult
     */
    public function __construct(\ArrayType\ArrayOfXmlNode $foundSearchResult = null)
    {
        $this
            ->setFoundSearchResult($foundSearchResult);
    }
    /**
     * Get foundSearchResult value
     * @return \ArrayType\ArrayOfXmlNode|null
     */
    public function getFoundSearchResult()
    {
        return $this->foundSearchResult;
    }
    /**
     * Set foundSearchResult value
     * @param \ArrayType\ArrayOfXmlNode $foundSearchResult
     * @return \StructType\FoundSearchResponse
     */
    public function setFoundSearchResult(\ArrayType\ArrayOfXmlNode $foundSearchResult = null)
    {
        $this->foundSearchResult = $foundSearchResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\FoundSearchResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
