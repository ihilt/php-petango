<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdoptionList StructType
 * @subpackage Structs
 */
class AdoptionList extends AbstractStructBase
{
    /**
     * The adoptionDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $adoptionDate;
    /**
     * The authKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $authKey;
    /**
     * The siteID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $siteID;
    /**
     * Constructor method for AdoptionList
     * @uses AdoptionList::setAdoptionDate()
     * @uses AdoptionList::setAuthKey()
     * @uses AdoptionList::setSiteID()
     * @param string $adoptionDate
     * @param string $authKey
     * @param string $siteID
     */
    public function __construct($adoptionDate = null, $authKey = null, $siteID = null)
    {
        $this
            ->setAdoptionDate($adoptionDate)
            ->setAuthKey($authKey)
            ->setSiteID($siteID);
    }
    /**
     * Get adoptionDate value
     * @return string
     */
    public function getAdoptionDate()
    {
        return $this->adoptionDate;
    }
    /**
     * Set adoptionDate value
     * @param string $adoptionDate
     * @return \StructType\AdoptionList
     */
    public function setAdoptionDate($adoptionDate = null)
    {
        // validation for constraint: string
        if (!is_null($adoptionDate) && !is_string($adoptionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($adoptionDate)), __LINE__);
        }
        $this->adoptionDate = $adoptionDate;
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
     * @return \StructType\AdoptionList
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
     * Get siteID value
     * @return string|null
     */
    public function getSiteID()
    {
        return $this->siteID;
    }
    /**
     * Set siteID value
     * @param string $siteID
     * @return \StructType\AdoptionList
     */
    public function setSiteID($siteID = null)
    {
        // validation for constraint: string
        if (!is_null($siteID) && !is_string($siteID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($siteID)), __LINE__);
        }
        $this->siteID = $siteID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AdoptionList
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
