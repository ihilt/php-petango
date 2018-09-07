<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for foundSearchForCompanyGroupResponse StructType
 * @subpackage Structs
 */
class FoundSearchForCompanyGroupResponse extends AbstractStructBase
{
    /**
     * The foundSearchForCompanyGroupResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfXmlNode
     */
    public $foundSearchForCompanyGroupResult;
    /**
     * Constructor method for foundSearchForCompanyGroupResponse
     * @uses FoundSearchForCompanyGroupResponse::setFoundSearchForCompanyGroupResult()
     * @param \ArrayType\ArrayOfXmlNode $foundSearchForCompanyGroupResult
     */
    public function __construct(\ArrayType\ArrayOfXmlNode $foundSearchForCompanyGroupResult = null)
    {
        $this
            ->setFoundSearchForCompanyGroupResult($foundSearchForCompanyGroupResult);
    }
    /**
     * Get foundSearchForCompanyGroupResult value
     * @return \ArrayType\ArrayOfXmlNode|null
     */
    public function getFoundSearchForCompanyGroupResult()
    {
        return $this->foundSearchForCompanyGroupResult;
    }
    /**
     * Set foundSearchForCompanyGroupResult value
     * @param \ArrayType\ArrayOfXmlNode $foundSearchForCompanyGroupResult
     * @return \StructType\FoundSearchForCompanyGroupResponse
     */
    public function setFoundSearchForCompanyGroupResult(\ArrayType\ArrayOfXmlNode $foundSearchForCompanyGroupResult = null)
    {
        $this->foundSearchForCompanyGroupResult = $foundSearchForCompanyGroupResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\FoundSearchForCompanyGroupResponse
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
