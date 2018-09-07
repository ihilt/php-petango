<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for lostDetailsForCompanyGroupResponse StructType
 * @subpackage Structs
 */
class LostDetailsForCompanyGroupResponse extends AbstractStructBase
{
    /**
     * The lostDetailsForCompanyGroupResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\LostDetailsForCompanyGroupResult
     */
    public $lostDetailsForCompanyGroupResult;
    /**
     * Constructor method for lostDetailsForCompanyGroupResponse
     * @uses LostDetailsForCompanyGroupResponse::setLostDetailsForCompanyGroupResult()
     * @param \StructType\LostDetailsForCompanyGroupResult $lostDetailsForCompanyGroupResult
     */
    public function __construct(\StructType\LostDetailsForCompanyGroupResult $lostDetailsForCompanyGroupResult = null)
    {
        $this
            ->setLostDetailsForCompanyGroupResult($lostDetailsForCompanyGroupResult);
    }
    /**
     * Get lostDetailsForCompanyGroupResult value
     * @return \StructType\LostDetailsForCompanyGroupResult|null
     */
    public function getLostDetailsForCompanyGroupResult()
    {
        return $this->lostDetailsForCompanyGroupResult;
    }
    /**
     * Set lostDetailsForCompanyGroupResult value
     * @param \StructType\LostDetailsForCompanyGroupResult $lostDetailsForCompanyGroupResult
     * @return \StructType\LostDetailsForCompanyGroupResponse
     */
    public function setLostDetailsForCompanyGroupResult(\StructType\LostDetailsForCompanyGroupResult $lostDetailsForCompanyGroupResult = null)
    {
        $this->lostDetailsForCompanyGroupResult = $lostDetailsForCompanyGroupResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LostDetailsForCompanyGroupResponse
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
