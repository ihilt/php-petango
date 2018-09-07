<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MedicalViewReportPdf StructType
 * @subpackage Structs
 */
class MedicalViewReportPdf extends AbstractStructBase
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
     * The ftpDestination
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ftpDestination;
    /**
     * Constructor method for MedicalViewReportPdf
     * @uses MedicalViewReportPdf::setAnimalID()
     * @uses MedicalViewReportPdf::setAuthKey()
     * @uses MedicalViewReportPdf::setFtpDestination()
     * @param int $animalID
     * @param string $authKey
     * @param string $ftpDestination
     */
    public function __construct($animalID = null, $authKey = null, $ftpDestination = null)
    {
        $this
            ->setAnimalID($animalID)
            ->setAuthKey($authKey)
            ->setFtpDestination($ftpDestination);
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
     * @return \StructType\MedicalViewReportPdf
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
     * @return \StructType\MedicalViewReportPdf
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
     * Get ftpDestination value
     * @return string|null
     */
    public function getFtpDestination()
    {
        return $this->ftpDestination;
    }
    /**
     * Set ftpDestination value
     * @param string $ftpDestination
     * @return \StructType\MedicalViewReportPdf
     */
    public function setFtpDestination($ftpDestination = null)
    {
        // validation for constraint: string
        if (!is_null($ftpDestination) && !is_string($ftpDestination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ftpDestination)), __LINE__);
        }
        $this->ftpDestination = $ftpDestination;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\MedicalViewReportPdf
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
