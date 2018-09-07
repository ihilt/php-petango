<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for foundSearchForCompanyGroupPageableResponse StructType
 * @subpackage Structs
 */
class FoundSearchForCompanyGroupPageableResponse extends AbstractStructBase
{
    /**
     * The foundSearchForCompanyGroupPageableResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfXmlNode
     */
    public $foundSearchForCompanyGroupPageableResult;
    /**
     * Constructor method for foundSearchForCompanyGroupPageableResponse
     * @uses FoundSearchForCompanyGroupPageableResponse::setFoundSearchForCompanyGroupPageableResult()
     * @param \ArrayType\ArrayOfXmlNode $foundSearchForCompanyGroupPageableResult
     */
    public function __construct(\ArrayType\ArrayOfXmlNode $foundSearchForCompanyGroupPageableResult = null)
    {
        $this
            ->setFoundSearchForCompanyGroupPageableResult($foundSearchForCompanyGroupPageableResult);
    }
    /**
     * Get foundSearchForCompanyGroupPageableResult value
     * @return \ArrayType\ArrayOfXmlNode|null
     */
    public function getFoundSearchForCompanyGroupPageableResult()
    {
        return $this->foundSearchForCompanyGroupPageableResult;
    }
    /**
     * Set foundSearchForCompanyGroupPageableResult value
     * @param \ArrayType\ArrayOfXmlNode $foundSearchForCompanyGroupPageableResult
     * @return \StructType\FoundSearchForCompanyGroupPageableResponse
     */
    public function setFoundSearchForCompanyGroupPageableResult(\ArrayType\ArrayOfXmlNode $foundSearchForCompanyGroupPageableResult = null)
    {
        $this->foundSearchForCompanyGroupPageableResult = $foundSearchForCompanyGroupPageableResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\FoundSearchForCompanyGroupPageableResponse
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
