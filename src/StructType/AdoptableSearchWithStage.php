<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdoptableSearchWithStage StructType
 * @subpackage Structs
 */
class AdoptableSearchWithStage extends AbstractStructBase
{
    /**
     * The authkey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $authkey;
    /**
     * The speciesID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $speciesID;
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
     * The location
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $location;
    /**
     * The site
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $site;
    /**
     * The onHold
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $onHold;
    /**
     * The orderBy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $orderBy;
    /**
     * The primaryBreed
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $primaryBreed;
    /**
     * The secondaryBreed
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $secondaryBreed;
    /**
     * The specialNeeds
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $specialNeeds;
    /**
     * The noDogs
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $noDogs;
    /**
     * The noCats
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $noCats;
    /**
     * The noKids
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $noKids;
    /**
     * The stageID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $stageID;
    /**
     * The featured
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $featured;
    /**
     * Constructor method for AdoptableSearchWithStage
     * @uses AdoptableSearchWithStage::setAuthkey()
     * @uses AdoptableSearchWithStage::setSpeciesID()
     * @uses AdoptableSearchWithStage::setSex()
     * @uses AdoptableSearchWithStage::setAgeGroup()
     * @uses AdoptableSearchWithStage::setLocation()
     * @uses AdoptableSearchWithStage::setSite()
     * @uses AdoptableSearchWithStage::setOnHold()
     * @uses AdoptableSearchWithStage::setOrderBy()
     * @uses AdoptableSearchWithStage::setPrimaryBreed()
     * @uses AdoptableSearchWithStage::setSecondaryBreed()
     * @uses AdoptableSearchWithStage::setSpecialNeeds()
     * @uses AdoptableSearchWithStage::setNoDogs()
     * @uses AdoptableSearchWithStage::setNoCats()
     * @uses AdoptableSearchWithStage::setNoKids()
     * @uses AdoptableSearchWithStage::setStageID()
     * @uses AdoptableSearchWithStage::setFeatured()
     * @param string $authkey
     * @param string $speciesID
     * @param string $sex
     * @param string $ageGroup
     * @param string $location
     * @param string $site
     * @param string $onHold
     * @param string $orderBy
     * @param string $primaryBreed
     * @param string $secondaryBreed
     * @param string $specialNeeds
     * @param string $noDogs
     * @param string $noCats
     * @param string $noKids
     * @param string $stageID
     * @param string $featured
     */
    public function __construct($authkey = null, $speciesID = null, $sex = null, $ageGroup = null, $location = null, $site = null, $onHold = null, $orderBy = null, $primaryBreed = null, $secondaryBreed = null, $specialNeeds = null, $noDogs = null, $noCats = null, $noKids = null, $stageID = null, $featured = null)
    {
        $this
            ->setAuthkey($authkey)
            ->setSpeciesID($speciesID)
            ->setSex($sex)
            ->setAgeGroup($ageGroup)
            ->setLocation($location)
            ->setSite($site)
            ->setOnHold($onHold)
            ->setOrderBy($orderBy)
            ->setPrimaryBreed($primaryBreed)
            ->setSecondaryBreed($secondaryBreed)
            ->setSpecialNeeds($specialNeeds)
            ->setNoDogs($noDogs)
            ->setNoCats($noCats)
            ->setNoKids($noKids)
            ->setStageID($stageID)
            ->setFeatured($featured);
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
     * @return \StructType\AdoptableSearchWithStage
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
     * Get speciesID value
     * @return string|null
     */
    public function getSpeciesID()
    {
        return $this->speciesID;
    }
    /**
     * Set speciesID value
     * @param string $speciesID
     * @return \StructType\AdoptableSearchWithStage
     */
    public function setSpeciesID($speciesID = null)
    {
        // validation for constraint: string
        if (!is_null($speciesID) && !is_string($speciesID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($speciesID)), __LINE__);
        }
        $this->speciesID = $speciesID;
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
     * @return \StructType\AdoptableSearchWithStage
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
     * @return \StructType\AdoptableSearchWithStage
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
     * Get location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * Set location value
     * @param string $location
     * @return \StructType\AdoptableSearchWithStage
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location)), __LINE__);
        }
        $this->location = $location;
        return $this;
    }
    /**
     * Get site value
     * @return string|null
     */
    public function getSite()
    {
        return $this->site;
    }
    /**
     * Set site value
     * @param string $site
     * @return \StructType\AdoptableSearchWithStage
     */
    public function setSite($site = null)
    {
        // validation for constraint: string
        if (!is_null($site) && !is_string($site)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($site)), __LINE__);
        }
        $this->site = $site;
        return $this;
    }
    /**
     * Get onHold value
     * @return string|null
     */
    public function getOnHold()
    {
        return $this->onHold;
    }
    /**
     * Set onHold value
     * @param string $onHold
     * @return \StructType\AdoptableSearchWithStage
     */
    public function setOnHold($onHold = null)
    {
        // validation for constraint: string
        if (!is_null($onHold) && !is_string($onHold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($onHold)), __LINE__);
        }
        $this->onHold = $onHold;
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
     * @return \StructType\AdoptableSearchWithStage
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
     * Get primaryBreed value
     * @return string|null
     */
    public function getPrimaryBreed()
    {
        return $this->primaryBreed;
    }
    /**
     * Set primaryBreed value
     * @param string $primaryBreed
     * @return \StructType\AdoptableSearchWithStage
     */
    public function setPrimaryBreed($primaryBreed = null)
    {
        // validation for constraint: string
        if (!is_null($primaryBreed) && !is_string($primaryBreed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primaryBreed)), __LINE__);
        }
        $this->primaryBreed = $primaryBreed;
        return $this;
    }
    /**
     * Get secondaryBreed value
     * @return string|null
     */
    public function getSecondaryBreed()
    {
        return $this->secondaryBreed;
    }
    /**
     * Set secondaryBreed value
     * @param string $secondaryBreed
     * @return \StructType\AdoptableSearchWithStage
     */
    public function setSecondaryBreed($secondaryBreed = null)
    {
        // validation for constraint: string
        if (!is_null($secondaryBreed) && !is_string($secondaryBreed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondaryBreed)), __LINE__);
        }
        $this->secondaryBreed = $secondaryBreed;
        return $this;
    }
    /**
     * Get specialNeeds value
     * @return string|null
     */
    public function getSpecialNeeds()
    {
        return $this->specialNeeds;
    }
    /**
     * Set specialNeeds value
     * @param string $specialNeeds
     * @return \StructType\AdoptableSearchWithStage
     */
    public function setSpecialNeeds($specialNeeds = null)
    {
        // validation for constraint: string
        if (!is_null($specialNeeds) && !is_string($specialNeeds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specialNeeds)), __LINE__);
        }
        $this->specialNeeds = $specialNeeds;
        return $this;
    }
    /**
     * Get noDogs value
     * @return string|null
     */
    public function getNoDogs()
    {
        return $this->noDogs;
    }
    /**
     * Set noDogs value
     * @param string $noDogs
     * @return \StructType\AdoptableSearchWithStage
     */
    public function setNoDogs($noDogs = null)
    {
        // validation for constraint: string
        if (!is_null($noDogs) && !is_string($noDogs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($noDogs)), __LINE__);
        }
        $this->noDogs = $noDogs;
        return $this;
    }
    /**
     * Get noCats value
     * @return string|null
     */
    public function getNoCats()
    {
        return $this->noCats;
    }
    /**
     * Set noCats value
     * @param string $noCats
     * @return \StructType\AdoptableSearchWithStage
     */
    public function setNoCats($noCats = null)
    {
        // validation for constraint: string
        if (!is_null($noCats) && !is_string($noCats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($noCats)), __LINE__);
        }
        $this->noCats = $noCats;
        return $this;
    }
    /**
     * Get noKids value
     * @return string|null
     */
    public function getNoKids()
    {
        return $this->noKids;
    }
    /**
     * Set noKids value
     * @param string $noKids
     * @return \StructType\AdoptableSearchWithStage
     */
    public function setNoKids($noKids = null)
    {
        // validation for constraint: string
        if (!is_null($noKids) && !is_string($noKids)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($noKids)), __LINE__);
        }
        $this->noKids = $noKids;
        return $this;
    }
    /**
     * Get stageID value
     * @return string|null
     */
    public function getStageID()
    {
        return $this->stageID;
    }
    /**
     * Set stageID value
     * @param string $stageID
     * @return \StructType\AdoptableSearchWithStage
     */
    public function setStageID($stageID = null)
    {
        // validation for constraint: string
        if (!is_null($stageID) && !is_string($stageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stageID)), __LINE__);
        }
        $this->stageID = $stageID;
        return $this;
    }
    /**
     * Get featured value
     * @return string|null
     */
    public function getFeatured()
    {
        return $this->featured;
    }
    /**
     * Set featured value
     * @param string $featured
     * @return \StructType\AdoptableSearchWithStage
     */
    public function setFeatured($featured = null)
    {
        // validation for constraint: string
        if (!is_null($featured) && !is_string($featured)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($featured)), __LINE__);
        }
        $this->featured = $featured;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AdoptableSearchWithStage
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
