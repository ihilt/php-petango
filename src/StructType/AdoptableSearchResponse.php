<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdoptableSearchResponse StructType
 * @subpackage Structs
 */
class AdoptableSearchResponse extends AbstractStructBase
{
    /**
     * The AdoptableSearchResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfXmlNode
     */
    public $AdoptableSearchResult;
    /**
     * Constructor method for AdoptableSearchResponse
     * @uses AdoptableSearchResponse::setAdoptableSearchResult()
     * @param \ArrayType\ArrayOfXmlNode $adoptableSearchResult
     */
    public function __construct(\ArrayType\ArrayOfXmlNode $adoptableSearchResult = null)
    {
        $this
            ->setAdoptableSearchResult($adoptableSearchResult);
    }
    /**
     * Get AdoptableSearchResult value
     * @return \ArrayType\ArrayOfXmlNode|null
     */
    public function getAdoptableSearchResult()
    {
        return $this->AdoptableSearchResult;
    }
    /**
     * Set AdoptableSearchResult value
     * @param \ArrayType\ArrayOfXmlNode $adoptableSearchResult
     * @return \StructType\AdoptableSearchResponse
     */
    public function setAdoptableSearchResult(\ArrayType\ArrayOfXmlNode $adoptableSearchResult = null)
    {
        $this->AdoptableSearchResult = $adoptableSearchResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AdoptableSearchResponse
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
