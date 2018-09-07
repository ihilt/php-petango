<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HappyTailDetailsResponse StructType
 * @subpackage Structs
 */
class HappyTailDetailsResponse extends AbstractStructBase
{
    /**
     * The HappyTailDetailsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfHappyTailDetailItem
     */
    public $HappyTailDetailsResult;
    /**
     * Constructor method for HappyTailDetailsResponse
     * @uses HappyTailDetailsResponse::setHappyTailDetailsResult()
     * @param \ArrayType\ArrayOfHappyTailDetailItem $happyTailDetailsResult
     */
    public function __construct(\ArrayType\ArrayOfHappyTailDetailItem $happyTailDetailsResult = null)
    {
        $this
            ->setHappyTailDetailsResult($happyTailDetailsResult);
    }
    /**
     * Get HappyTailDetailsResult value
     * @return \ArrayType\ArrayOfHappyTailDetailItem|null
     */
    public function getHappyTailDetailsResult()
    {
        return $this->HappyTailDetailsResult;
    }
    /**
     * Set HappyTailDetailsResult value
     * @param \ArrayType\ArrayOfHappyTailDetailItem $happyTailDetailsResult
     * @return \StructType\HappyTailDetailsResponse
     */
    public function setHappyTailDetailsResult(\ArrayType\ArrayOfHappyTailDetailItem $happyTailDetailsResult = null)
    {
        $this->HappyTailDetailsResult = $happyTailDetailsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HappyTailDetailsResponse
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
