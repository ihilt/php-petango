<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for foundDetailsForCompanyGroupResponse StructType
 * @subpackage Structs
 */
class FoundDetailsForCompanyGroupResponse extends AbstractStructBase
{
    /**
     * The foundDetailsForCompanyGroupResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\FoundDetailsForCompanyGroupResult
     */
    public $foundDetailsForCompanyGroupResult;
    /**
     * Constructor method for foundDetailsForCompanyGroupResponse
     * @uses FoundDetailsForCompanyGroupResponse::setFoundDetailsForCompanyGroupResult()
     * @param \StructType\FoundDetailsForCompanyGroupResult $foundDetailsForCompanyGroupResult
     */
    public function __construct(\StructType\FoundDetailsForCompanyGroupResult $foundDetailsForCompanyGroupResult = null)
    {
        $this
            ->setFoundDetailsForCompanyGroupResult($foundDetailsForCompanyGroupResult);
    }
    /**
     * Get foundDetailsForCompanyGroupResult value
     * @return \StructType\FoundDetailsForCompanyGroupResult|null
     */
    public function getFoundDetailsForCompanyGroupResult()
    {
        return $this->foundDetailsForCompanyGroupResult;
    }
    /**
     * Set foundDetailsForCompanyGroupResult value
     * @param \StructType\FoundDetailsForCompanyGroupResult $foundDetailsForCompanyGroupResult
     * @return \StructType\FoundDetailsForCompanyGroupResponse
     */
    public function setFoundDetailsForCompanyGroupResult(\StructType\FoundDetailsForCompanyGroupResult $foundDetailsForCompanyGroupResult = null)
    {
        $this->foundDetailsForCompanyGroupResult = $foundDetailsForCompanyGroupResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\FoundDetailsForCompanyGroupResponse
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
