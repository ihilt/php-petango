<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Adoption ServiceType
 * @subpackage Services
 */
class Adoption extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AdoptionDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AdoptionDetails $parameters
     * @return \StructType\AdoptionDetailsResponse|bool
     */
    public function AdoptionDetails(\StructType\AdoptionDetails $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AdoptionDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AdoptionList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AdoptionList $parameters
     * @return \StructType\AdoptionListResponse|bool
     */
    public function AdoptionList(\StructType\AdoptionList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AdoptionList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\AdoptionDetailsResponse|\StructType\AdoptionListResponse
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
