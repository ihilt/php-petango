<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HappyTailList StructType
 * @subpackage Structs
 */
class HappyTailList extends AbstractStructBase
{
    /**
     * The pSpeciesID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $pSpeciesID;
    /**
     * The pSiteID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $pSiteID;
    /**
     * The pCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $pCount;
    /**
     * The pAuthKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $pAuthKey;
    /**
     * The pOrderBy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $pOrderBy;
    /**
     * The pFeaturedPet
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $pFeaturedPet;
    /**
     * Constructor method for HappyTailList
     * @uses HappyTailList::setPSpeciesID()
     * @uses HappyTailList::setPSiteID()
     * @uses HappyTailList::setPCount()
     * @uses HappyTailList::setPAuthKey()
     * @uses HappyTailList::setPOrderBy()
     * @uses HappyTailList::setPFeaturedPet()
     * @param int $pSpeciesID
     * @param int $pSiteID
     * @param int $pCount
     * @param string $pAuthKey
     * @param string $pOrderBy
     * @param string $pFeaturedPet
     */
    public function __construct($pSpeciesID = null, $pSiteID = null, $pCount = null, $pAuthKey = null, $pOrderBy = null, $pFeaturedPet = null)
    {
        $this
            ->setPSpeciesID($pSpeciesID)
            ->setPSiteID($pSiteID)
            ->setPCount($pCount)
            ->setPAuthKey($pAuthKey)
            ->setPOrderBy($pOrderBy)
            ->setPFeaturedPet($pFeaturedPet);
    }
    /**
     * Get pSpeciesID value
     * @return int
     */
    public function getPSpeciesID()
    {
        return $this->pSpeciesID;
    }
    /**
     * Set pSpeciesID value
     * @param int $pSpeciesID
     * @return \StructType\HappyTailList
     */
    public function setPSpeciesID($pSpeciesID = null)
    {
        // validation for constraint: int
        if (!is_null($pSpeciesID) && !is_numeric($pSpeciesID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pSpeciesID)), __LINE__);
        }
        $this->pSpeciesID = $pSpeciesID;
        return $this;
    }
    /**
     * Get pSiteID value
     * @return int
     */
    public function getPSiteID()
    {
        return $this->pSiteID;
    }
    /**
     * Set pSiteID value
     * @param int $pSiteID
     * @return \StructType\HappyTailList
     */
    public function setPSiteID($pSiteID = null)
    {
        // validation for constraint: int
        if (!is_null($pSiteID) && !is_numeric($pSiteID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pSiteID)), __LINE__);
        }
        $this->pSiteID = $pSiteID;
        return $this;
    }
    /**
     * Get pCount value
     * @return int
     */
    public function getPCount()
    {
        return $this->pCount;
    }
    /**
     * Set pCount value
     * @param int $pCount
     * @return \StructType\HappyTailList
     */
    public function setPCount($pCount = null)
    {
        // validation for constraint: int
        if (!is_null($pCount) && !is_numeric($pCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pCount)), __LINE__);
        }
        $this->pCount = $pCount;
        return $this;
    }
    /**
     * Get pAuthKey value
     * @return string|null
     */
    public function getPAuthKey()
    {
        return $this->pAuthKey;
    }
    /**
     * Set pAuthKey value
     * @param string $pAuthKey
     * @return \StructType\HappyTailList
     */
    public function setPAuthKey($pAuthKey = null)
    {
        // validation for constraint: string
        if (!is_null($pAuthKey) && !is_string($pAuthKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pAuthKey)), __LINE__);
        }
        $this->pAuthKey = $pAuthKey;
        return $this;
    }
    /**
     * Get pOrderBy value
     * @return string|null
     */
    public function getPOrderBy()
    {
        return $this->pOrderBy;
    }
    /**
     * Set pOrderBy value
     * @param string $pOrderBy
     * @return \StructType\HappyTailList
     */
    public function setPOrderBy($pOrderBy = null)
    {
        // validation for constraint: string
        if (!is_null($pOrderBy) && !is_string($pOrderBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pOrderBy)), __LINE__);
        }
        $this->pOrderBy = $pOrderBy;
        return $this;
    }
    /**
     * Get pFeaturedPet value
     * @return string|null
     */
    public function getPFeaturedPet()
    {
        return $this->pFeaturedPet;
    }
    /**
     * Set pFeaturedPet value
     * @param string $pFeaturedPet
     * @return \StructType\HappyTailList
     */
    public function setPFeaturedPet($pFeaturedPet = null)
    {
        // validation for constraint: string
        if (!is_null($pFeaturedPet) && !is_string($pFeaturedPet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pFeaturedPet)), __LINE__);
        }
        $this->pFeaturedPet = $pFeaturedPet;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HappyTailList
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
