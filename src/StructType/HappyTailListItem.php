<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HappyTailListItem StructType
 * @subpackage Structs
 */
class HappyTailListItem extends AbstractStructBase
{
    /**
     * The AdoptionID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $AdoptionID;
    /**
     * The AdoptionDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AdoptionDate;
    /**
     * The HappyTExpiryDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $HappyTExpiryDate;
    /**
     * The AnimalID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $AnimalID;
    /**
     * The CompanyID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $CompanyID;
    /**
     * The ShelterID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ShelterID;
    /**
     * The SpeciesID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SpeciesID;
    /**
     * The SiteID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SiteID;
    /**
     * The DateOfBirth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DateOfBirth;
    /**
     * The SpecialNeeds
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $SpecialNeeds;
    /**
     * The PrimaryBreedID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $PrimaryBreedID;
    /**
     * The SecondaryBreedID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SecondaryBreedID;
    /**
     * The AgeGroupID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $AgeGroupID;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Species
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Species;
    /**
     * The Sex
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Sex;
    /**
     * The PostZipCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PostZipCode;
    /**
     * The SpayedNeutered
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SpayedNeutered;
    /**
     * The Size
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Size;
    /**
     * The PrimaryBreed
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PrimaryBreed;
    /**
     * The SecondaryBreed
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SecondaryBreed;
    /**
     * The AgeGroup
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AgeGroup;
    /**
     * The Photo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Photo;
    /**
     * Constructor method for HappyTailListItem
     * @uses HappyTailListItem::setAdoptionID()
     * @uses HappyTailListItem::setAdoptionDate()
     * @uses HappyTailListItem::setHappyTExpiryDate()
     * @uses HappyTailListItem::setAnimalID()
     * @uses HappyTailListItem::setCompanyID()
     * @uses HappyTailListItem::setShelterID()
     * @uses HappyTailListItem::setSpeciesID()
     * @uses HappyTailListItem::setSiteID()
     * @uses HappyTailListItem::setDateOfBirth()
     * @uses HappyTailListItem::setSpecialNeeds()
     * @uses HappyTailListItem::setPrimaryBreedID()
     * @uses HappyTailListItem::setSecondaryBreedID()
     * @uses HappyTailListItem::setAgeGroupID()
     * @uses HappyTailListItem::setName()
     * @uses HappyTailListItem::setSpecies()
     * @uses HappyTailListItem::setSex()
     * @uses HappyTailListItem::setPostZipCode()
     * @uses HappyTailListItem::setSpayedNeutered()
     * @uses HappyTailListItem::setSize()
     * @uses HappyTailListItem::setPrimaryBreed()
     * @uses HappyTailListItem::setSecondaryBreed()
     * @uses HappyTailListItem::setAgeGroup()
     * @uses HappyTailListItem::setPhoto()
     * @param int $adoptionID
     * @param string $adoptionDate
     * @param string $happyTExpiryDate
     * @param int $animalID
     * @param int $companyID
     * @param int $shelterID
     * @param int $speciesID
     * @param int $siteID
     * @param string $dateOfBirth
     * @param bool $specialNeeds
     * @param int $primaryBreedID
     * @param int $secondaryBreedID
     * @param int $ageGroupID
     * @param string $name
     * @param string $species
     * @param string $sex
     * @param string $postZipCode
     * @param string $spayedNeutered
     * @param string $size
     * @param string $primaryBreed
     * @param string $secondaryBreed
     * @param string $ageGroup
     * @param string $photo
     */
    public function __construct($adoptionID = null, $adoptionDate = null, $happyTExpiryDate = null, $animalID = null, $companyID = null, $shelterID = null, $speciesID = null, $siteID = null, $dateOfBirth = null, $specialNeeds = null, $primaryBreedID = null, $secondaryBreedID = null, $ageGroupID = null, $name = null, $species = null, $sex = null, $postZipCode = null, $spayedNeutered = null, $size = null, $primaryBreed = null, $secondaryBreed = null, $ageGroup = null, $photo = null)
    {
        $this
            ->setAdoptionID($adoptionID)
            ->setAdoptionDate($adoptionDate)
            ->setHappyTExpiryDate($happyTExpiryDate)
            ->setAnimalID($animalID)
            ->setCompanyID($companyID)
            ->setShelterID($shelterID)
            ->setSpeciesID($speciesID)
            ->setSiteID($siteID)
            ->setDateOfBirth($dateOfBirth)
            ->setSpecialNeeds($specialNeeds)
            ->setPrimaryBreedID($primaryBreedID)
            ->setSecondaryBreedID($secondaryBreedID)
            ->setAgeGroupID($ageGroupID)
            ->setName($name)
            ->setSpecies($species)
            ->setSex($sex)
            ->setPostZipCode($postZipCode)
            ->setSpayedNeutered($spayedNeutered)
            ->setSize($size)
            ->setPrimaryBreed($primaryBreed)
            ->setSecondaryBreed($secondaryBreed)
            ->setAgeGroup($ageGroup)
            ->setPhoto($photo);
    }
    /**
     * Get AdoptionID value
     * @return int
     */
    public function getAdoptionID()
    {
        return $this->AdoptionID;
    }
    /**
     * Set AdoptionID value
     * @param int $adoptionID
     * @return \StructType\HappyTailListItem
     */
    public function setAdoptionID($adoptionID = null)
    {
        // validation for constraint: int
        if (!is_null($adoptionID) && !is_numeric($adoptionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($adoptionID)), __LINE__);
        }
        $this->AdoptionID = $adoptionID;
        return $this;
    }
    /**
     * Get AdoptionDate value
     * @return string
     */
    public function getAdoptionDate()
    {
        return $this->AdoptionDate;
    }
    /**
     * Set AdoptionDate value
     * @param string $adoptionDate
     * @return \StructType\HappyTailListItem
     */
    public function setAdoptionDate($adoptionDate = null)
    {
        // validation for constraint: string
        if (!is_null($adoptionDate) && !is_string($adoptionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($adoptionDate)), __LINE__);
        }
        $this->AdoptionDate = $adoptionDate;
        return $this;
    }
    /**
     * Get HappyTExpiryDate value
     * @return string
     */
    public function getHappyTExpiryDate()
    {
        return $this->HappyTExpiryDate;
    }
    /**
     * Set HappyTExpiryDate value
     * @param string $happyTExpiryDate
     * @return \StructType\HappyTailListItem
     */
    public function setHappyTExpiryDate($happyTExpiryDate = null)
    {
        // validation for constraint: string
        if (!is_null($happyTExpiryDate) && !is_string($happyTExpiryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($happyTExpiryDate)), __LINE__);
        }
        $this->HappyTExpiryDate = $happyTExpiryDate;
        return $this;
    }
    /**
     * Get AnimalID value
     * @return int
     */
    public function getAnimalID()
    {
        return $this->AnimalID;
    }
    /**
     * Set AnimalID value
     * @param int $animalID
     * @return \StructType\HappyTailListItem
     */
    public function setAnimalID($animalID = null)
    {
        // validation for constraint: int
        if (!is_null($animalID) && !is_numeric($animalID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($animalID)), __LINE__);
        }
        $this->AnimalID = $animalID;
        return $this;
    }
    /**
     * Get CompanyID value
     * @return int
     */
    public function getCompanyID()
    {
        return $this->CompanyID;
    }
    /**
     * Set CompanyID value
     * @param int $companyID
     * @return \StructType\HappyTailListItem
     */
    public function setCompanyID($companyID = null)
    {
        // validation for constraint: int
        if (!is_null($companyID) && !is_numeric($companyID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($companyID)), __LINE__);
        }
        $this->CompanyID = $companyID;
        return $this;
    }
    /**
     * Get ShelterID value
     * @return int
     */
    public function getShelterID()
    {
        return $this->ShelterID;
    }
    /**
     * Set ShelterID value
     * @param int $shelterID
     * @return \StructType\HappyTailListItem
     */
    public function setShelterID($shelterID = null)
    {
        // validation for constraint: int
        if (!is_null($shelterID) && !is_numeric($shelterID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shelterID)), __LINE__);
        }
        $this->ShelterID = $shelterID;
        return $this;
    }
    /**
     * Get SpeciesID value
     * @return int
     */
    public function getSpeciesID()
    {
        return $this->SpeciesID;
    }
    /**
     * Set SpeciesID value
     * @param int $speciesID
     * @return \StructType\HappyTailListItem
     */
    public function setSpeciesID($speciesID = null)
    {
        // validation for constraint: int
        if (!is_null($speciesID) && !is_numeric($speciesID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($speciesID)), __LINE__);
        }
        $this->SpeciesID = $speciesID;
        return $this;
    }
    /**
     * Get SiteID value
     * @return int
     */
    public function getSiteID()
    {
        return $this->SiteID;
    }
    /**
     * Set SiteID value
     * @param int $siteID
     * @return \StructType\HappyTailListItem
     */
    public function setSiteID($siteID = null)
    {
        // validation for constraint: int
        if (!is_null($siteID) && !is_numeric($siteID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($siteID)), __LINE__);
        }
        $this->SiteID = $siteID;
        return $this;
    }
    /**
     * Get DateOfBirth value
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->DateOfBirth;
    }
    /**
     * Set DateOfBirth value
     * @param string $dateOfBirth
     * @return \StructType\HappyTailListItem
     */
    public function setDateOfBirth($dateOfBirth = null)
    {
        // validation for constraint: string
        if (!is_null($dateOfBirth) && !is_string($dateOfBirth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateOfBirth)), __LINE__);
        }
        $this->DateOfBirth = $dateOfBirth;
        return $this;
    }
    /**
     * Get SpecialNeeds value
     * @return bool
     */
    public function getSpecialNeeds()
    {
        return $this->SpecialNeeds;
    }
    /**
     * Set SpecialNeeds value
     * @param bool $specialNeeds
     * @return \StructType\HappyTailListItem
     */
    public function setSpecialNeeds($specialNeeds = null)
    {
        // validation for constraint: boolean
        if (!is_null($specialNeeds) && !is_bool($specialNeeds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($specialNeeds)), __LINE__);
        }
        $this->SpecialNeeds = $specialNeeds;
        return $this;
    }
    /**
     * Get PrimaryBreedID value
     * @return int
     */
    public function getPrimaryBreedID()
    {
        return $this->PrimaryBreedID;
    }
    /**
     * Set PrimaryBreedID value
     * @param int $primaryBreedID
     * @return \StructType\HappyTailListItem
     */
    public function setPrimaryBreedID($primaryBreedID = null)
    {
        // validation for constraint: int
        if (!is_null($primaryBreedID) && !is_numeric($primaryBreedID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($primaryBreedID)), __LINE__);
        }
        $this->PrimaryBreedID = $primaryBreedID;
        return $this;
    }
    /**
     * Get SecondaryBreedID value
     * @return int
     */
    public function getSecondaryBreedID()
    {
        return $this->SecondaryBreedID;
    }
    /**
     * Set SecondaryBreedID value
     * @param int $secondaryBreedID
     * @return \StructType\HappyTailListItem
     */
    public function setSecondaryBreedID($secondaryBreedID = null)
    {
        // validation for constraint: int
        if (!is_null($secondaryBreedID) && !is_numeric($secondaryBreedID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($secondaryBreedID)), __LINE__);
        }
        $this->SecondaryBreedID = $secondaryBreedID;
        return $this;
    }
    /**
     * Get AgeGroupID value
     * @return int
     */
    public function getAgeGroupID()
    {
        return $this->AgeGroupID;
    }
    /**
     * Set AgeGroupID value
     * @param int $ageGroupID
     * @return \StructType\HappyTailListItem
     */
    public function setAgeGroupID($ageGroupID = null)
    {
        // validation for constraint: int
        if (!is_null($ageGroupID) && !is_numeric($ageGroupID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ageGroupID)), __LINE__);
        }
        $this->AgeGroupID = $ageGroupID;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\HappyTailListItem
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Species value
     * @return string|null
     */
    public function getSpecies()
    {
        return $this->Species;
    }
    /**
     * Set Species value
     * @param string $species
     * @return \StructType\HappyTailListItem
     */
    public function setSpecies($species = null)
    {
        // validation for constraint: string
        if (!is_null($species) && !is_string($species)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($species)), __LINE__);
        }
        $this->Species = $species;
        return $this;
    }
    /**
     * Get Sex value
     * @return string|null
     */
    public function getSex()
    {
        return $this->Sex;
    }
    /**
     * Set Sex value
     * @param string $sex
     * @return \StructType\HappyTailListItem
     */
    public function setSex($sex = null)
    {
        // validation for constraint: string
        if (!is_null($sex) && !is_string($sex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sex)), __LINE__);
        }
        $this->Sex = $sex;
        return $this;
    }
    /**
     * Get PostZipCode value
     * @return string|null
     */
    public function getPostZipCode()
    {
        return $this->PostZipCode;
    }
    /**
     * Set PostZipCode value
     * @param string $postZipCode
     * @return \StructType\HappyTailListItem
     */
    public function setPostZipCode($postZipCode = null)
    {
        // validation for constraint: string
        if (!is_null($postZipCode) && !is_string($postZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postZipCode)), __LINE__);
        }
        $this->PostZipCode = $postZipCode;
        return $this;
    }
    /**
     * Get SpayedNeutered value
     * @return string|null
     */
    public function getSpayedNeutered()
    {
        return $this->SpayedNeutered;
    }
    /**
     * Set SpayedNeutered value
     * @param string $spayedNeutered
     * @return \StructType\HappyTailListItem
     */
    public function setSpayedNeutered($spayedNeutered = null)
    {
        // validation for constraint: string
        if (!is_null($spayedNeutered) && !is_string($spayedNeutered)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($spayedNeutered)), __LINE__);
        }
        $this->SpayedNeutered = $spayedNeutered;
        return $this;
    }
    /**
     * Get Size value
     * @return string|null
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param string $size
     * @return \StructType\HappyTailListItem
     */
    public function setSize($size = null)
    {
        // validation for constraint: string
        if (!is_null($size) && !is_string($size)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($size)), __LINE__);
        }
        $this->Size = $size;
        return $this;
    }
    /**
     * Get PrimaryBreed value
     * @return string|null
     */
    public function getPrimaryBreed()
    {
        return $this->PrimaryBreed;
    }
    /**
     * Set PrimaryBreed value
     * @param string $primaryBreed
     * @return \StructType\HappyTailListItem
     */
    public function setPrimaryBreed($primaryBreed = null)
    {
        // validation for constraint: string
        if (!is_null($primaryBreed) && !is_string($primaryBreed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primaryBreed)), __LINE__);
        }
        $this->PrimaryBreed = $primaryBreed;
        return $this;
    }
    /**
     * Get SecondaryBreed value
     * @return string|null
     */
    public function getSecondaryBreed()
    {
        return $this->SecondaryBreed;
    }
    /**
     * Set SecondaryBreed value
     * @param string $secondaryBreed
     * @return \StructType\HappyTailListItem
     */
    public function setSecondaryBreed($secondaryBreed = null)
    {
        // validation for constraint: string
        if (!is_null($secondaryBreed) && !is_string($secondaryBreed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondaryBreed)), __LINE__);
        }
        $this->SecondaryBreed = $secondaryBreed;
        return $this;
    }
    /**
     * Get AgeGroup value
     * @return string|null
     */
    public function getAgeGroup()
    {
        return $this->AgeGroup;
    }
    /**
     * Set AgeGroup value
     * @param string $ageGroup
     * @return \StructType\HappyTailListItem
     */
    public function setAgeGroup($ageGroup = null)
    {
        // validation for constraint: string
        if (!is_null($ageGroup) && !is_string($ageGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ageGroup)), __LINE__);
        }
        $this->AgeGroup = $ageGroup;
        return $this;
    }
    /**
     * Get Photo value
     * @return string|null
     */
    public function getPhoto()
    {
        return $this->Photo;
    }
    /**
     * Set Photo value
     * @param string $photo
     * @return \StructType\HappyTailListItem
     */
    public function setPhoto($photo = null)
    {
        // validation for constraint: string
        if (!is_null($photo) && !is_string($photo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($photo)), __LINE__);
        }
        $this->Photo = $photo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HappyTailListItem
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
