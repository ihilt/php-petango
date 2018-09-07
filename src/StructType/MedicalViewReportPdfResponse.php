<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MedicalViewReportPdfResponse StructType
 * @subpackage Structs
 */
class MedicalViewReportPdfResponse extends AbstractStructBase
{
    /**
     * The MedicalViewReportPdfResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $MedicalViewReportPdfResult;
    /**
     * Constructor method for MedicalViewReportPdfResponse
     * @uses MedicalViewReportPdfResponse::setMedicalViewReportPdfResult()
     * @param bool $medicalViewReportPdfResult
     */
    public function __construct($medicalViewReportPdfResult = null)
    {
        $this
            ->setMedicalViewReportPdfResult($medicalViewReportPdfResult);
    }
    /**
     * Get MedicalViewReportPdfResult value
     * @return bool
     */
    public function getMedicalViewReportPdfResult()
    {
        return $this->MedicalViewReportPdfResult;
    }
    /**
     * Set MedicalViewReportPdfResult value
     * @param bool $medicalViewReportPdfResult
     * @return \StructType\MedicalViewReportPdfResponse
     */
    public function setMedicalViewReportPdfResult($medicalViewReportPdfResult = null)
    {
        // validation for constraint: boolean
        if (!is_null($medicalViewReportPdfResult) && !is_bool($medicalViewReportPdfResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($medicalViewReportPdfResult)), __LINE__);
        }
        $this->MedicalViewReportPdfResult = $medicalViewReportPdfResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\MedicalViewReportPdfResponse
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
