<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Adoptable ServiceType
 * @subpackage Services
 */
class Adoptable extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AdoptableSearch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AdoptableSearch $parameters
     * @return \StructType\AdoptableSearchResponse|bool
     */
    public function AdoptableSearch(\StructType\AdoptableSearch $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AdoptableSearch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AdoptableSearchWithStage
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AdoptableSearchWithStage $parameters
     * @return \StructType\AdoptableSearchWithStageResponse|bool
     */
    public function AdoptableSearchWithStage(\StructType\AdoptableSearchWithStage $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AdoptableSearchWithStage($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AdoptableDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AdoptableDetails $parameters
     * @return \StructType\AdoptableDetailsResponse|bool
     */
    public function AdoptableDetails(\StructType\AdoptableDetails $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->AdoptableDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\AdoptableDetailsResponse|\StructType\AdoptableSearchResponse|\StructType\AdoptableSearchWithStageResponse
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
