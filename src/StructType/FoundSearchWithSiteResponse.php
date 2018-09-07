<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for foundSearchWithSiteResponse StructType
 * @subpackage Structs
 */
class FoundSearchWithSiteResponse extends AbstractStructBase
{
    /**
     * The foundSearchWithSiteResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfXmlNode
     */
    public $foundSearchWithSiteResult;
    /**
     * Constructor method for foundSearchWithSiteResponse
     * @uses FoundSearchWithSiteResponse::setFoundSearchWithSiteResult()
     * @param \ArrayType\ArrayOfXmlNode $foundSearchWithSiteResult
     */
    public function __construct(\ArrayType\ArrayOfXmlNode $foundSearchWithSiteResult = null)
    {
        $this
            ->setFoundSearchWithSiteResult($foundSearchWithSiteResult);
    }
    /**
     * Get foundSearchWithSiteResult value
     * @return \ArrayType\ArrayOfXmlNode|null
     */
    public function getFoundSearchWithSiteResult()
    {
        return $this->foundSearchWithSiteResult;
    }
    /**
     * Set foundSearchWithSiteResult value
     * @param \ArrayType\ArrayOfXmlNode $foundSearchWithSiteResult
     * @return \StructType\FoundSearchWithSiteResponse
     */
    public function setFoundSearchWithSiteResult(\ArrayType\ArrayOfXmlNode $foundSearchWithSiteResult = null)
    {
        $this->foundSearchWithSiteResult = $foundSearchWithSiteResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\FoundSearchWithSiteResponse
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
