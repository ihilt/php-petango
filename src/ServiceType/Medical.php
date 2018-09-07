<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Medical ServiceType
 * @subpackage Services
 */
class Medical extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named MedicalViewReportPdf
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\MedicalViewReportPdf $parameters
     * @return \StructType\MedicalViewReportPdfResponse|bool
     */
    public function MedicalViewReportPdf(\StructType\MedicalViewReportPdf $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->MedicalViewReportPdf($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\MedicalViewReportPdfResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
