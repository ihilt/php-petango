<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdoptionDetailsResponse StructType
 * @subpackage Structs
 */
class AdoptionDetailsResponse extends AbstractStructBase
{
    /**
     * The AdoptionDetailsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdoptionDetailsResult
     */
    public $AdoptionDetailsResult;
    /**
     * Constructor method for AdoptionDetailsResponse
     * @uses AdoptionDetailsResponse::setAdoptionDetailsResult()
     * @param \StructType\AdoptionDetailsResult $adoptionDetailsResult
     */
    public function __construct(\StructType\AdoptionDetailsResult $adoptionDetailsResult = null)
    {
        $this
            ->setAdoptionDetailsResult($adoptionDetailsResult);
    }
    /**
     * Get AdoptionDetailsResult value
     * @return \StructType\AdoptionDetailsResult|null
     */
    public function getAdoptionDetailsResult()
    {
        return $this->AdoptionDetailsResult;
    }
    /**
     * Set AdoptionDetailsResult value
     * @param \StructType\AdoptionDetailsResult $adoptionDetailsResult
     * @return \StructType\AdoptionDetailsResponse
     */
    public function setAdoptionDetailsResult(\StructType\AdoptionDetailsResult $adoptionDetailsResult = null)
    {
        $this->AdoptionDetailsResult = $adoptionDetailsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AdoptionDetailsResponse
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
