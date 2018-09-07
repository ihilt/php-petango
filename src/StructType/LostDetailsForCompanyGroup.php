<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for lostDetailsForCompanyGroup StructType
 * @subpackage Structs
 */
class LostDetailsForCompanyGroup extends AbstractStructBase
{
    /**
     * The animalID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $animalID;
    /**
     * The authkey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $authkey;
    /**
     * Constructor method for lostDetailsForCompanyGroup
     * @uses LostDetailsForCompanyGroup::setAnimalID()
     * @uses LostDetailsForCompanyGroup::setAuthkey()
     * @param int $animalID
     * @param string $authkey
     */
    public function __construct($animalID = null, $authkey = null)
    {
        $this
            ->setAnimalID($animalID)
            ->setAuthkey($authkey);
    }
    /**
     * Get animalID value
     * @return int
     */
    public function getAnimalID()
    {
        return $this->animalID;
    }
    /**
     * Set animalID value
     * @param int $animalID
     * @return \StructType\LostDetailsForCompanyGroup
     */
    public function setAnimalID($animalID = null)
    {
        // validation for constraint: int
        if (!is_null($animalID) && !is_numeric($animalID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($animalID)), __LINE__);
        }
        $this->animalID = $animalID;
        return $this;
    }
    /**
     * Get authkey value
     * @return string|null
     */
    public function getAuthkey()
    {
        return $this->authkey;
    }
    /**
     * Set authkey value
     * @param string $authkey
     * @return \StructType\LostDetailsForCompanyGroup
     */
    public function setAuthkey($authkey = null)
    {
        // validation for constraint: string
        if (!is_null($authkey) && !is_string($authkey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authkey)), __LINE__);
        }
        $this->authkey = $authkey;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LostDetailsForCompanyGroup
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
