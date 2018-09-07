<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for foundDetailsResponse StructType
 * @subpackage Structs
 */
class FoundDetailsResponse extends AbstractStructBase
{
    /**
     * The foundDetailsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\FoundDetailsResult
     */
    public $foundDetailsResult;
    /**
     * Constructor method for foundDetailsResponse
     * @uses FoundDetailsResponse::setFoundDetailsResult()
     * @param \StructType\FoundDetailsResult $foundDetailsResult
     */
    public function __construct(\StructType\FoundDetailsResult $foundDetailsResult = null)
    {
        $this
            ->setFoundDetailsResult($foundDetailsResult);
    }
    /**
     * Get foundDetailsResult value
     * @return \StructType\FoundDetailsResult|null
     */
    public function getFoundDetailsResult()
    {
        return $this->foundDetailsResult;
    }
    /**
     * Set foundDetailsResult value
     * @param \StructType\FoundDetailsResult $foundDetailsResult
     * @return \StructType\FoundDetailsResponse
     */
    public function setFoundDetailsResult(\StructType\FoundDetailsResult $foundDetailsResult = null)
    {
        $this->foundDetailsResult = $foundDetailsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\FoundDetailsResponse
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
