<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdoptableDetailsResponse StructType
 * @subpackage Structs
 */
class AdoptableDetailsResponse extends AbstractStructBase
{
    /**
     * The AdoptableDetailsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdoptableDetailsResult
     */
    public $AdoptableDetailsResult;
    /**
     * Constructor method for AdoptableDetailsResponse
     * @uses AdoptableDetailsResponse::setAdoptableDetailsResult()
     * @param \StructType\AdoptableDetailsResult $adoptableDetailsResult
     */
    public function __construct(\StructType\AdoptableDetailsResult $adoptableDetailsResult = null)
    {
        $this
            ->setAdoptableDetailsResult($adoptableDetailsResult);
    }
    /**
     * Get AdoptableDetailsResult value
     * @return \StructType\AdoptableDetailsResult|null
     */
    public function getAdoptableDetailsResult()
    {
        return $this->AdoptableDetailsResult;
    }
    /**
     * Set AdoptableDetailsResult value
     * @param \StructType\AdoptableDetailsResult $adoptableDetailsResult
     * @return \StructType\AdoptableDetailsResponse
     */
    public function setAdoptableDetailsResult(\StructType\AdoptableDetailsResult $adoptableDetailsResult = null)
    {
        $this->AdoptableDetailsResult = $adoptableDetailsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AdoptableDetailsResponse
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
