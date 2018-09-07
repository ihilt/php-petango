<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for lostSearchForCompanyGroupResponse StructType
 * @subpackage Structs
 */
class LostSearchForCompanyGroupResponse extends AbstractStructBase
{
    /**
     * The lostSearchForCompanyGroupResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfXmlNode
     */
    public $lostSearchForCompanyGroupResult;
    /**
     * Constructor method for lostSearchForCompanyGroupResponse
     * @uses LostSearchForCompanyGroupResponse::setLostSearchForCompanyGroupResult()
     * @param \ArrayType\ArrayOfXmlNode $lostSearchForCompanyGroupResult
     */
    public function __construct(\ArrayType\ArrayOfXmlNode $lostSearchForCompanyGroupResult = null)
    {
        $this
            ->setLostSearchForCompanyGroupResult($lostSearchForCompanyGroupResult);
    }
    /**
     * Get lostSearchForCompanyGroupResult value
     * @return \ArrayType\ArrayOfXmlNode|null
     */
    public function getLostSearchForCompanyGroupResult()
    {
        return $this->lostSearchForCompanyGroupResult;
    }
    /**
     * Set lostSearchForCompanyGroupResult value
     * @param \ArrayType\ArrayOfXmlNode $lostSearchForCompanyGroupResult
     * @return \StructType\LostSearchForCompanyGroupResponse
     */
    public function setLostSearchForCompanyGroupResult(\ArrayType\ArrayOfXmlNode $lostSearchForCompanyGroupResult = null)
    {
        $this->lostSearchForCompanyGroupResult = $lostSearchForCompanyGroupResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LostSearchForCompanyGroupResponse
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
