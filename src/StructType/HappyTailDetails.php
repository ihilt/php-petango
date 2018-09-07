<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HappyTailDetails StructType
 * @subpackage Structs
 */
class HappyTailDetails extends AbstractStructBase
{
    /**
     * The pAdoptionID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $pAdoptionID;
    /**
     * The pAuthkey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $pAuthkey;
    /**
     * Constructor method for HappyTailDetails
     * @uses HappyTailDetails::setPAdoptionID()
     * @uses HappyTailDetails::setPAuthkey()
     * @param int $pAdoptionID
     * @param string $pAuthkey
     */
    public function __construct($pAdoptionID = null, $pAuthkey = null)
    {
        $this
            ->setPAdoptionID($pAdoptionID)
            ->setPAuthkey($pAuthkey);
    }
    /**
     * Get pAdoptionID value
     * @return int
     */
    public function getPAdoptionID()
    {
        return $this->pAdoptionID;
    }
    /**
     * Set pAdoptionID value
     * @param int $pAdoptionID
     * @return \StructType\HappyTailDetails
     */
    public function setPAdoptionID($pAdoptionID = null)
    {
        // validation for constraint: int
        if (!is_null($pAdoptionID) && !is_numeric($pAdoptionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pAdoptionID)), __LINE__);
        }
        $this->pAdoptionID = $pAdoptionID;
        return $this;
    }
    /**
     * Get pAuthkey value
     * @return string|null
     */
    public function getPAuthkey()
    {
        return $this->pAuthkey;
    }
    /**
     * Set pAuthkey value
     * @param string $pAuthkey
     * @return \StructType\HappyTailDetails
     */
    public function setPAuthkey($pAuthkey = null)
    {
        // validation for constraint: string
        if (!is_null($pAuthkey) && !is_string($pAuthkey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pAuthkey)), __LINE__);
        }
        $this->pAuthkey = $pAuthkey;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HappyTailDetails
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
