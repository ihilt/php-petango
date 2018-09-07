<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdoptableSearchWithStageResponse StructType
 * @subpackage Structs
 */
class AdoptableSearchWithStageResponse extends AbstractStructBase
{
    /**
     * The AdoptableSearchWithStageResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfXmlNode
     */
    public $AdoptableSearchWithStageResult;
    /**
     * Constructor method for AdoptableSearchWithStageResponse
     * @uses AdoptableSearchWithStageResponse::setAdoptableSearchWithStageResult()
     * @param \ArrayType\ArrayOfXmlNode $adoptableSearchWithStageResult
     */
    public function __construct(\ArrayType\ArrayOfXmlNode $adoptableSearchWithStageResult = null)
    {
        $this
            ->setAdoptableSearchWithStageResult($adoptableSearchWithStageResult);
    }
    /**
     * Get AdoptableSearchWithStageResult value
     * @return \ArrayType\ArrayOfXmlNode|null
     */
    public function getAdoptableSearchWithStageResult()
    {
        return $this->AdoptableSearchWithStageResult;
    }
    /**
     * Set AdoptableSearchWithStageResult value
     * @param \ArrayType\ArrayOfXmlNode $adoptableSearchWithStageResult
     * @return \StructType\AdoptableSearchWithStageResponse
     */
    public function setAdoptableSearchWithStageResult(\ArrayType\ArrayOfXmlNode $adoptableSearchWithStageResult = null)
    {
        $this->AdoptableSearchWithStageResult = $adoptableSearchWithStageResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AdoptableSearchWithStageResponse
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
