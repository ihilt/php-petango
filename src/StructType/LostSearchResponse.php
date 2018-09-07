<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for lostSearchResponse StructType
 * @subpackage Structs
 */
class LostSearchResponse extends AbstractStructBase
{
    /**
     * The lostSearchResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfXmlNode
     */
    public $lostSearchResult;
    /**
     * Constructor method for lostSearchResponse
     * @uses LostSearchResponse::setLostSearchResult()
     * @param \ArrayType\ArrayOfXmlNode $lostSearchResult
     */
    public function __construct(\ArrayType\ArrayOfXmlNode $lostSearchResult = null)
    {
        $this
            ->setLostSearchResult($lostSearchResult);
    }
    /**
     * Get lostSearchResult value
     * @return \ArrayType\ArrayOfXmlNode|null
     */
    public function getLostSearchResult()
    {
        return $this->lostSearchResult;
    }
    /**
     * Set lostSearchResult value
     * @param \ArrayType\ArrayOfXmlNode $lostSearchResult
     * @return \StructType\LostSearchResponse
     */
    public function setLostSearchResult(\ArrayType\ArrayOfXmlNode $lostSearchResult = null)
    {
        $this->lostSearchResult = $lostSearchResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LostSearchResponse
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
