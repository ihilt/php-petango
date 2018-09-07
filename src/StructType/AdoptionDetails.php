<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdoptionDetails StructType
 * @subpackage Structs
 */
class AdoptionDetails extends AbstractStructBase
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
     * The authKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $authKey;
    /**
     * Constructor method for AdoptionDetails
     * @uses AdoptionDetails::setAnimalID()
     * @uses AdoptionDetails::setAuthKey()
     * @param int $animalID
     * @param string $authKey
     */
    public function __construct($animalID = null, $authKey = null)
    {
        $this
            ->setAnimalID($animalID)
            ->setAuthKey($authKey);
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
     * @return \StructType\AdoptionDetails
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
     * Get authKey value
     * @return string|null
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }
    /**
     * Set authKey value
     * @param string $authKey
     * @return \StructType\AdoptionDetails
     */
    public function setAuthKey($authKey = null)
    {
        // validation for constraint: string
        if (!is_null($authKey) && !is_string($authKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authKey)), __LINE__);
        }
        $this->authKey = $authKey;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AdoptionDetails
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
