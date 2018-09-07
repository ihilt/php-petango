<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Found ServiceType
 * @subpackage Services
 */
class Found extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named foundSearch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FoundSearch $parameters
     * @return \StructType\FoundSearchResponse|bool
     */
    public function foundSearch(\StructType\FoundSearch $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->foundSearch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named foundSearchForCompanyGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FoundSearchForCompanyGroup $parameters
     * @return \StructType\FoundSearchForCompanyGroupResponse|bool
     */
    public function foundSearchForCompanyGroup(\StructType\FoundSearchForCompanyGroup $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->foundSearchForCompanyGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named foundSearchForCompanyGroupPageable
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FoundSearchForCompanyGroupPageable $parameters
     * @return \StructType\FoundSearchForCompanyGroupPageableResponse|bool
     */
    public function foundSearchForCompanyGroupPageable(\StructType\FoundSearchForCompanyGroupPageable $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->foundSearchForCompanyGroupPageable($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named foundSearchWithSite
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FoundSearchWithSite $parameters
     * @return \StructType\FoundSearchWithSiteResponse|bool
     */
    public function foundSearchWithSite(\StructType\FoundSearchWithSite $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->foundSearchWithSite($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named foundDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FoundDetails $parameters
     * @return \StructType\FoundDetailsResponse|bool
     */
    public function foundDetails(\StructType\FoundDetails $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->foundDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named foundDetailsForCompanyGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FoundDetailsForCompanyGroup $parameters
     * @return \StructType\FoundDetailsForCompanyGroupResponse|bool
     */
    public function foundDetailsForCompanyGroup(\StructType\FoundDetailsForCompanyGroup $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->foundDetailsForCompanyGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\FoundDetailsForCompanyGroupResponse|\StructType\FoundDetailsResponse|\StructType\FoundSearchForCompanyGroupPageableResponse|\StructType\FoundSearchForCompanyGroupResponse|\StructType\FoundSearchResponse|\StructType\FoundSearchWithSiteResponse
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
