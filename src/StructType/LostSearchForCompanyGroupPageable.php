<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for lostSearchForCompanyGroupPageable StructType
 * @subpackage Structs
 */
class LostSearchForCompanyGroupPageable extends AbstractStructBase
{
    /**
     * The speciesID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $speciesID;
    /**
     * The skip
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $skip;
    /**
     * The take
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $take;
    /**
     * The sex
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $sex;
    /**
     * The ageGroup
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ageGroup;
    /**
     * The authkey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $authkey;
    /**
     * The orderBy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $orderBy;
    /**
     * Constructor method for lostSearchForCompanyGroupPageable
     * @uses LostSearchForCompanyGroupPageable::setSpeciesID()
     * @uses LostSearchForCompanyGroupPageable::setSkip()
     * @uses LostSearchForCompanyGroupPageable::setTake()
     * @uses LostSearchForCompanyGroupPageable::setSex()
     * @uses LostSearchForCompanyGroupPageable::setAgeGroup()
     * @uses LostSearchForCompanyGroupPageable::setAuthkey()
     * @uses LostSearchForCompanyGroupPageable::setOrderBy()
     * @param int $speciesID
     * @param int $skip
     * @param int $take
     * @param string $sex
     * @param string $ageGroup
     * @param string $authkey
     * @param string $orderBy
     */
    public function __construct($speciesID = null, $skip = null, $take = null, $sex = null, $ageGroup = null, $authkey = null, $orderBy = null)
    {
        $this
            ->setSpeciesID($speciesID)
            ->setSkip($skip)
            ->setTake($take)
            ->setSex($sex)
            ->setAgeGroup($ageGroup)
            ->setAuthkey($authkey)
            ->setOrderBy($orderBy);
    }
    /**
     * Get speciesID value
     * @return int
     */
    public function getSpeciesID()
    {
        return $this->speciesID;
    }
    /**
     * Set speciesID value
     * @param int $speciesID
     * @return \StructType\LostSearchForCompanyGroupPageable
     */
    public function setSpeciesID($speciesID = null)
    {
        // validation for constraint: int
        if (!is_null($speciesID) && !is_numeric($speciesID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($speciesID)), __LINE__);
        }
        $this->speciesID = $speciesID;
        return $this;
    }
    /**
     * Get skip value
     * @return int
     */
    public function getSkip()
    {
        return $this->skip;
    }
    /**
     * Set skip value
     * @param int $skip
     * @return \StructType\LostSearchForCompanyGroupPageable
     */
    public function setSkip($skip = null)
    {
        // validation for constraint: int
        if (!is_null($skip) && !is_numeric($skip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($skip)), __LINE__);
        }
        $this->skip = $skip;
        return $this;
    }
    /**
     * Get take value
     * @return int
     */
    public function getTake()
    {
        return $this->take;
    }
    /**
     * Set take value
     * @param int $take
     * @return \StructType\LostSearchForCompanyGroupPageable
     */
    public function setTake($take = null)
    {
        // validation for constraint: int
        if (!is_null($take) && !is_numeric($take)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($take)), __LINE__);
        }
        $this->take = $take;
        return $this;
    }
    /**
     * Get sex value
     * @return string|null
     */
    public function getSex()
    {
        return $this->sex;
    }
    /**
     * Set sex value
     * @param string $sex
     * @return \StructType\LostSearchForCompanyGroupPageable
     */
    public function setSex($sex = null)
    {
        // validation for constraint: string
        if (!is_null($sex) && !is_string($sex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sex)), __LINE__);
        }
        $this->sex = $sex;
        return $this;
    }
    /**
     * Get ageGroup value
     * @return string|null
     */
    public function getAgeGroup()
    {
        return $this->ageGroup;
    }
    /**
     * Set ageGroup value
     * @param string $ageGroup
     * @return \StructType\LostSearchForCompanyGroupPageable
     */
    public function setAgeGroup($ageGroup = null)
    {
        // validation for constraint: string
        if (!is_null($ageGroup) && !is_string($ageGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ageGroup)), __LINE__);
        }
        $this->ageGroup = $ageGroup;
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
     * @return \StructType\LostSearchForCompanyGroupPageable
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
     * Get orderBy value
     * @return string|null
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }
    /**
     * Set orderBy value
     * @param string $orderBy
     * @return \StructType\LostSearchForCompanyGroupPageable
     */
    public function setOrderBy($orderBy = null)
    {
        // validation for constraint: string
        if (!is_null($orderBy) && !is_string($orderBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderBy)), __LINE__);
        }
        $this->orderBy = $orderBy;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LostSearchForCompanyGroupPageable
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
