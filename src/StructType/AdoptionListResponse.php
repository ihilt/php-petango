<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdoptionListResponse StructType
 * @subpackage Structs
 */
class AdoptionListResponse extends AbstractStructBase
{
    /**
     * The AdoptionListResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfXmlNode
     */
    public $AdoptionListResult;
    /**
     * Constructor method for AdoptionListResponse
     * @uses AdoptionListResponse::setAdoptionListResult()
     * @param \ArrayType\ArrayOfXmlNode $adoptionListResult
     */
    public function __construct(\ArrayType\ArrayOfXmlNode $adoptionListResult = null)
    {
        $this
            ->setAdoptionListResult($adoptionListResult);
    }
    /**
     * Get AdoptionListResult value
     * @return \ArrayType\ArrayOfXmlNode|null
     */
    public function getAdoptionListResult()
    {
        return $this->AdoptionListResult;
    }
    /**
     * Set AdoptionListResult value
     * @param \ArrayType\ArrayOfXmlNode $adoptionListResult
     * @return \StructType\AdoptionListResponse
     */
    public function setAdoptionListResult(\ArrayType\ArrayOfXmlNode $adoptionListResult = null)
    {
        $this->AdoptionListResult = $adoptionListResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AdoptionListResponse
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
