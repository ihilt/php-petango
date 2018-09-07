<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for lostSearchForCompanyGroupPageableResponse StructType
 * @subpackage Structs
 */
class LostSearchForCompanyGroupPageableResponse extends AbstractStructBase
{
    /**
     * The lostSearchForCompanyGroupPageableResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfXmlNode
     */
    public $lostSearchForCompanyGroupPageableResult;
    /**
     * Constructor method for lostSearchForCompanyGroupPageableResponse
     * @uses LostSearchForCompanyGroupPageableResponse::setLostSearchForCompanyGroupPageableResult()
     * @param \ArrayType\ArrayOfXmlNode $lostSearchForCompanyGroupPageableResult
     */
    public function __construct(\ArrayType\ArrayOfXmlNode $lostSearchForCompanyGroupPageableResult = null)
    {
        $this
            ->setLostSearchForCompanyGroupPageableResult($lostSearchForCompanyGroupPageableResult);
    }
    /**
     * Get lostSearchForCompanyGroupPageableResult value
     * @return \ArrayType\ArrayOfXmlNode|null
     */
    public function getLostSearchForCompanyGroupPageableResult()
    {
        return $this->lostSearchForCompanyGroupPageableResult;
    }
    /**
     * Set lostSearchForCompanyGroupPageableResult value
     * @param \ArrayType\ArrayOfXmlNode $lostSearchForCompanyGroupPageableResult
     * @return \StructType\LostSearchForCompanyGroupPageableResponse
     */
    public function setLostSearchForCompanyGroupPageableResult(\ArrayType\ArrayOfXmlNode $lostSearchForCompanyGroupPageableResult = null)
    {
        $this->lostSearchForCompanyGroupPageableResult = $lostSearchForCompanyGroupPageableResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LostSearchForCompanyGroupPageableResponse
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
