<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Happy ServiceType
 * @subpackage Services
 */
class Happy extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named HappyTailList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\HappyTailList $parameters
     * @return \StructType\HappyTailListResponse|bool
     */
    public function HappyTailList(\StructType\HappyTailList $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->HappyTailList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named HappyTailDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\HappyTailDetails $parameters
     * @return \StructType\HappyTailDetailsResponse|bool
     */
    public function HappyTailDetails(\StructType\HappyTailDetails $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->HappyTailDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\HappyTailDetailsResponse|\StructType\HappyTailListResponse
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
