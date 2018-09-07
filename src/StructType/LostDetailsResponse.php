<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for lostDetailsResponse StructType
 * @subpackage Structs
 */
class LostDetailsResponse extends AbstractStructBase
{
    /**
     * The lostDetailsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\LostDetailsResult
     */
    public $lostDetailsResult;
    /**
     * Constructor method for lostDetailsResponse
     * @uses LostDetailsResponse::setLostDetailsResult()
     * @param \StructType\LostDetailsResult $lostDetailsResult
     */
    public function __construct(\StructType\LostDetailsResult $lostDetailsResult = null)
    {
        $this
            ->setLostDetailsResult($lostDetailsResult);
    }
    /**
     * Get lostDetailsResult value
     * @return \StructType\LostDetailsResult|null
     */
    public function getLostDetailsResult()
    {
        return $this->lostDetailsResult;
    }
    /**
     * Set lostDetailsResult value
     * @param \StructType\LostDetailsResult $lostDetailsResult
     * @return \StructType\LostDetailsResponse
     */
    public function setLostDetailsResult(\StructType\LostDetailsResult $lostDetailsResult = null)
    {
        $this->lostDetailsResult = $lostDetailsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LostDetailsResponse
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
