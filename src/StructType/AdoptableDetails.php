<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdoptableDetails StructType
 * @subpackage Structs
 */
class AdoptableDetails extends AbstractStructBase
{
    /**
     * The animalID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
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
     * Constructor method for AdoptableDetails
     * @uses AdoptableDetails::setAnimalID()
     * @uses AdoptableDetails::setAuthkey()
     * @param string $animalID
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
     * @return string|null
     */
    public function getAnimalID()
    {
        return $this->animalID;
    }
    /**
     * Set animalID value
     * @param string $animalID
     * @return \StructType\AdoptableDetails
     */
    public function setAnimalID($animalID = null)
    {
        // validation for constraint: string
        if (!is_null($animalID) && !is_string($animalID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($animalID)), __LINE__);
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
     * @return \StructType\AdoptableDetails
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
     * @return \StructType\AdoptableDetails
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
