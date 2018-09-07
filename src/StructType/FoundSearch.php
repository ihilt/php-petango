<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for foundSearch StructType
 * @subpackage Structs
 */
class FoundSearch extends AbstractStructBase
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
     * The searchOption
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $searchOption;
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
     * Constructor method for foundSearch
     * @uses FoundSearch::setSpeciesID()
     * @uses FoundSearch::setSearchOption()
     * @uses FoundSearch::setSex()
     * @uses FoundSearch::setAgeGroup()
     * @uses FoundSearch::setAuthkey()
     * @uses FoundSearch::setOrderBy()
     * @param int $speciesID
     * @param int $searchOption
     * @param string $sex
     * @param string $ageGroup
     * @param string $authkey
     * @param string $orderBy
     */
    public function __construct($speciesID = null, $searchOption = null, $sex = null, $ageGroup = null, $authkey = null, $orderBy = null)
    {
        $this
            ->setSpeciesID($speciesID)
            ->setSearchOption($searchOption)
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
     * @return \StructType\FoundSearch
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
     * Get searchOption value
     * @return int
     */
    public function getSearchOption()
    {
        return $this->searchOption;
    }
    /**
     * Set searchOption value
     * @param int $searchOption
     * @return \StructType\FoundSearch
     */
    public function setSearchOption($searchOption = null)
    {
        // validation for constraint: int
        if (!is_null($searchOption) && !is_numeric($searchOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($searchOption)), __LINE__);
        }
        $this->searchOption = $searchOption;
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
     * @return \StructType\FoundSearch
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
     * @return \StructType\FoundSearch
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
     * @return \StructType\FoundSearch
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
     * @return \StructType\FoundSearch
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
     * @return \StructType\FoundSearch
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
