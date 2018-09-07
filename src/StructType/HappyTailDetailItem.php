<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HappyTailDetailItem StructType
 * @subpackage Structs
 */
class HappyTailDetailItem extends HappyTailListItem
{
    /**
     * The PrimaryColorID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $PrimaryColorID;
    /**
     * The SecondaryColorID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SecondaryColorID;
    /**
     * The HouseTrained
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $HouseTrained;
    /**
     * The PrimaryColor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PrimaryColor;
    /**
     * The SecondaryColor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SecondaryColor;
    /**
     * The Declawed
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Declawed;
    /**
     * The Photo2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Photo2;
    /**
     * The Photo3
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Photo3;
    /**
     * The Memo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Memo;
    /**
     * The ShelterMicrosite
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShelterMicrosite;
    /**
     * Constructor method for HappyTailDetailItem
     * @uses HappyTailDetailItem::setPrimaryColorID()
     * @uses HappyTailDetailItem::setSecondaryColorID()
     * @uses HappyTailDetailItem::setHouseTrained()
     * @uses HappyTailDetailItem::setPrimaryColor()
     * @uses HappyTailDetailItem::setSecondaryColor()
     * @uses HappyTailDetailItem::setDeclawed()
     * @uses HappyTailDetailItem::setPhoto2()
     * @uses HappyTailDetailItem::setPhoto3()
     * @uses HappyTailDetailItem::setMemo()
     * @uses HappyTailDetailItem::setShelterMicrosite()
     * @param int $primaryColorID
     * @param int $secondaryColorID
     * @param string $houseTrained
     * @param string $primaryColor
     * @param string $secondaryColor
     * @param string $declawed
     * @param string $photo2
     * @param string $photo3
     * @param string $memo
     * @param string $shelterMicrosite
     */
    public function __construct($primaryColorID = null, $secondaryColorID = null, $houseTrained = null, $primaryColor = null, $secondaryColor = null, $declawed = null, $photo2 = null, $photo3 = null, $memo = null, $shelterMicrosite = null)
    {
        $this
            ->setPrimaryColorID($primaryColorID)
            ->setSecondaryColorID($secondaryColorID)
            ->setHouseTrained($houseTrained)
            ->setPrimaryColor($primaryColor)
            ->setSecondaryColor($secondaryColor)
            ->setDeclawed($declawed)
            ->setPhoto2($photo2)
            ->setPhoto3($photo3)
            ->setMemo($memo)
            ->setShelterMicrosite($shelterMicrosite);
    }
    /**
     * Get PrimaryColorID value
     * @return int
     */
    public function getPrimaryColorID()
    {
        return $this->PrimaryColorID;
    }
    /**
     * Set PrimaryColorID value
     * @param int $primaryColorID
     * @return \StructType\HappyTailDetailItem
     */
    public function setPrimaryColorID($primaryColorID = null)
    {
        // validation for constraint: int
        if (!is_null($primaryColorID) && !is_numeric($primaryColorID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($primaryColorID)), __LINE__);
        }
        $this->PrimaryColorID = $primaryColorID;
        return $this;
    }
    /**
     * Get SecondaryColorID value
     * @return int
     */
    public function getSecondaryColorID()
    {
        return $this->SecondaryColorID;
    }
    /**
     * Set SecondaryColorID value
     * @param int $secondaryColorID
     * @return \StructType\HappyTailDetailItem
     */
    public function setSecondaryColorID($secondaryColorID = null)
    {
        // validation for constraint: int
        if (!is_null($secondaryColorID) && !is_numeric($secondaryColorID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($secondaryColorID)), __LINE__);
        }
        $this->SecondaryColorID = $secondaryColorID;
        return $this;
    }
    /**
     * Get HouseTrained value
     * @return string|null
     */
    public function getHouseTrained()
    {
        return $this->HouseTrained;
    }
    /**
     * Set HouseTrained value
     * @param string $houseTrained
     * @return \StructType\HappyTailDetailItem
     */
    public function setHouseTrained($houseTrained = null)
    {
        // validation for constraint: string
        if (!is_null($houseTrained) && !is_string($houseTrained)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($houseTrained)), __LINE__);
        }
        $this->HouseTrained = $houseTrained;
        return $this;
    }
    /**
     * Get PrimaryColor value
     * @return string|null
     */
    public function getPrimaryColor()
    {
        return $this->PrimaryColor;
    }
    /**
     * Set PrimaryColor value
     * @param string $primaryColor
     * @return \StructType\HappyTailDetailItem
     */
    public function setPrimaryColor($primaryColor = null)
    {
        // validation for constraint: string
        if (!is_null($primaryColor) && !is_string($primaryColor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primaryColor)), __LINE__);
        }
        $this->PrimaryColor = $primaryColor;
        return $this;
    }
    /**
     * Get SecondaryColor value
     * @return string|null
     */
    public function getSecondaryColor()
    {
        return $this->SecondaryColor;
    }
    /**
     * Set SecondaryColor value
     * @param string $secondaryColor
     * @return \StructType\HappyTailDetailItem
     */
    public function setSecondaryColor($secondaryColor = null)
    {
        // validation for constraint: string
        if (!is_null($secondaryColor) && !is_string($secondaryColor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondaryColor)), __LINE__);
        }
        $this->SecondaryColor = $secondaryColor;
        return $this;
    }
    /**
     * Get Declawed value
     * @return string|null
     */
    public function getDeclawed()
    {
        return $this->Declawed;
    }
    /**
     * Set Declawed value
     * @param string $declawed
     * @return \StructType\HappyTailDetailItem
     */
    public function setDeclawed($declawed = null)
    {
        // validation for constraint: string
        if (!is_null($declawed) && !is_string($declawed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($declawed)), __LINE__);
        }
        $this->Declawed = $declawed;
        return $this;
    }
    /**
     * Get Photo2 value
     * @return string|null
     */
    public function getPhoto2()
    {
        return $this->Photo2;
    }
    /**
     * Set Photo2 value
     * @param string $photo2
     * @return \StructType\HappyTailDetailItem
     */
    public function setPhoto2($photo2 = null)
    {
        // validation for constraint: string
        if (!is_null($photo2) && !is_string($photo2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($photo2)), __LINE__);
        }
        $this->Photo2 = $photo2;
        return $this;
    }
    /**
     * Get Photo3 value
     * @return string|null
     */
    public function getPhoto3()
    {
        return $this->Photo3;
    }
    /**
     * Set Photo3 value
     * @param string $photo3
     * @return \StructType\HappyTailDetailItem
     */
    public function setPhoto3($photo3 = null)
    {
        // validation for constraint: string
        if (!is_null($photo3) && !is_string($photo3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($photo3)), __LINE__);
        }
        $this->Photo3 = $photo3;
        return $this;
    }
    /**
     * Get Memo value
     * @return string|null
     */
    public function getMemo()
    {
        return $this->Memo;
    }
    /**
     * Set Memo value
     * @param string $memo
     * @return \StructType\HappyTailDetailItem
     */
    public function setMemo($memo = null)
    {
        // validation for constraint: string
        if (!is_null($memo) && !is_string($memo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($memo)), __LINE__);
        }
        $this->Memo = $memo;
        return $this;
    }
    /**
     * Get ShelterMicrosite value
     * @return string|null
     */
    public function getShelterMicrosite()
    {
        return $this->ShelterMicrosite;
    }
    /**
     * Set ShelterMicrosite value
     * @param string $shelterMicrosite
     * @return \StructType\HappyTailDetailItem
     */
    public function setShelterMicrosite($shelterMicrosite = null)
    {
        // validation for constraint: string
        if (!is_null($shelterMicrosite) && !is_string($shelterMicrosite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shelterMicrosite)), __LINE__);
        }
        $this->ShelterMicrosite = $shelterMicrosite;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HappyTailDetailItem
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
