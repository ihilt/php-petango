<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HappyTailListResponse StructType
 * @subpackage Structs
 */
class HappyTailListResponse extends AbstractStructBase
{
    /**
     * The HappyTailListResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfAnyType
     */
    public $HappyTailListResult;
    /**
     * Constructor method for HappyTailListResponse
     * @uses HappyTailListResponse::setHappyTailListResult()
     * @param \ArrayType\ArrayOfAnyType $happyTailListResult
     */
    public function __construct(\ArrayType\ArrayOfAnyType $happyTailListResult = null)
    {
        $this
            ->setHappyTailListResult($happyTailListResult);
    }
    /**
     * Get HappyTailListResult value
     * @return \ArrayType\ArrayOfAnyType|null
     */
    public function getHappyTailListResult()
    {
        return $this->HappyTailListResult;
    }
    /**
     * Set HappyTailListResult value
     * @param \ArrayType\ArrayOfAnyType $happyTailListResult
     * @return \StructType\HappyTailListResponse
     */
    public function setHappyTailListResult(\ArrayType\ArrayOfAnyType $happyTailListResult = null)
    {
        $this->HappyTailListResult = $happyTailListResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HappyTailListResponse
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
