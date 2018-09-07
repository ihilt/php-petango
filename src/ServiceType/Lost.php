<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Lost ServiceType
 * @subpackage Services
 */
class Lost extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named lostSearch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\LostSearch $parameters
     * @return \StructType\LostSearchResponse|bool
     */
    public function lostSearch(\StructType\LostSearch $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->lostSearch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named lostSearchForCompanyGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\LostSearchForCompanyGroup $parameters
     * @return \StructType\LostSearchForCompanyGroupResponse|bool
     */
    public function lostSearchForCompanyGroup(\StructType\LostSearchForCompanyGroup $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->lostSearchForCompanyGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named lostSearchForCompanyGroupPageable
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\LostSearchForCompanyGroupPageable $parameters
     * @return \StructType\LostSearchForCompanyGroupPageableResponse|bool
     */
    public function lostSearchForCompanyGroupPageable(\StructType\LostSearchForCompanyGroupPageable $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->lostSearchForCompanyGroupPageable($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named lostDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\LostDetails $parameters
     * @return \StructType\LostDetailsResponse|bool
     */
    public function lostDetails(\StructType\LostDetails $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->lostDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named lostDetailsForCompanyGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\LostDetailsForCompanyGroup $parameters
     * @return \StructType\LostDetailsForCompanyGroupResponse|bool
     */
    public function lostDetailsForCompanyGroup(\StructType\LostDetailsForCompanyGroup $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->lostDetailsForCompanyGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\LostDetailsForCompanyGroupResponse|\StructType\LostDetailsResponse|\StructType\LostSearchForCompanyGroupPageableResponse|\StructType\LostSearchForCompanyGroupResponse|\StructType\LostSearchResponse
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
