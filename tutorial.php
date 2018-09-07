<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'main.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'main.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);
/**
 * Samples for Medical ServiceType
 */
$medical = new \ServiceType\Medical($options);
/**
 * Sample call for MedicalViewReportPdf operation/method
 */
if ($medical->MedicalViewReportPdf(new \StructType\MedicalViewReportPdf()) !== false) {
    print_r($medical->getResult());
} else {
    print_r($medical->getLastError());
}
/**
 * Samples for Adoption ServiceType
 */
$adoption = new \ServiceType\Adoption($options);
/**
 * Sample call for AdoptionDetails operation/method
 */
if ($adoption->AdoptionDetails(new \StructType\AdoptionDetails()) !== false) {
    print_r($adoption->getResult());
} else {
    print_r($adoption->getLastError());
}
/**
 * Sample call for AdoptionList operation/method
 */
if ($adoption->AdoptionList(new \StructType\AdoptionList()) !== false) {
    print_r($adoption->getResult());
} else {
    print_r($adoption->getLastError());
}
/**
 * Samples for Adoptable ServiceType
 */
$adoptable = new \ServiceType\Adoptable($options);
/**
 * Sample call for AdoptableSearch operation/method
 */
if ($adoptable->AdoptableSearch(new \StructType\AdoptableSearch()) !== false) {
    print_r($adoptable->getResult());
} else {
    print_r($adoptable->getLastError());
}
/**
 * Sample call for AdoptableSearchWithStage operation/method
 */
if ($adoptable->AdoptableSearchWithStage(new \StructType\AdoptableSearchWithStage()) !== false) {
    print_r($adoptable->getResult());
} else {
    print_r($adoptable->getLastError());
}
/**
 * Sample call for AdoptableDetails operation/method
 */
if ($adoptable->AdoptableDetails(new \StructType\AdoptableDetails()) !== false) {
    print_r($adoptable->getResult());
} else {
    print_r($adoptable->getLastError());
}
/**
 * Samples for Found ServiceType
 */
$found = new \ServiceType\Found($options);
/**
 * Sample call for foundSearch operation/method
 */
if ($found->foundSearch(new \StructType\FoundSearch()) !== false) {
    print_r($found->getResult());
} else {
    print_r($found->getLastError());
}
/**
 * Sample call for foundSearchForCompanyGroup operation/method
 */
if ($found->foundSearchForCompanyGroup(new \StructType\FoundSearchForCompanyGroup()) !== false) {
    print_r($found->getResult());
} else {
    print_r($found->getLastError());
}
/**
 * Sample call for foundSearchForCompanyGroupPageable operation/method
 */
if ($found->foundSearchForCompanyGroupPageable(new \StructType\FoundSearchForCompanyGroupPageable()) !== false) {
    print_r($found->getResult());
} else {
    print_r($found->getLastError());
}
/**
 * Sample call for foundSearchWithSite operation/method
 */
if ($found->foundSearchWithSite(new \StructType\FoundSearchWithSite()) !== false) {
    print_r($found->getResult());
} else {
    print_r($found->getLastError());
}
/**
 * Sample call for foundDetails operation/method
 */
if ($found->foundDetails(new \StructType\FoundDetails()) !== false) {
    print_r($found->getResult());
} else {
    print_r($found->getLastError());
}
/**
 * Sample call for foundDetailsForCompanyGroup operation/method
 */
if ($found->foundDetailsForCompanyGroup(new \StructType\FoundDetailsForCompanyGroup()) !== false) {
    print_r($found->getResult());
} else {
    print_r($found->getLastError());
}
/**
 * Samples for Lost ServiceType
 */
$lost = new \ServiceType\Lost($options);
/**
 * Sample call for lostSearch operation/method
 */
if ($lost->lostSearch(new \StructType\LostSearch()) !== false) {
    print_r($lost->getResult());
} else {
    print_r($lost->getLastError());
}
/**
 * Sample call for lostSearchForCompanyGroup operation/method
 */
if ($lost->lostSearchForCompanyGroup(new \StructType\LostSearchForCompanyGroup()) !== false) {
    print_r($lost->getResult());
} else {
    print_r($lost->getLastError());
}
/**
 * Sample call for lostSearchForCompanyGroupPageable operation/method
 */
if ($lost->lostSearchForCompanyGroupPageable(new \StructType\LostSearchForCompanyGroupPageable()) !== false) {
    print_r($lost->getResult());
} else {
    print_r($lost->getLastError());
}
/**
 * Sample call for lostDetails operation/method
 */
if ($lost->lostDetails(new \StructType\LostDetails()) !== false) {
    print_r($lost->getResult());
} else {
    print_r($lost->getLastError());
}
/**
 * Sample call for lostDetailsForCompanyGroup operation/method
 */
if ($lost->lostDetailsForCompanyGroup(new \StructType\LostDetailsForCompanyGroup()) !== false) {
    print_r($lost->getResult());
} else {
    print_r($lost->getLastError());
}
/**
 * Samples for Happy ServiceType
 */
$happy = new \ServiceType\Happy($options);
/**
 * Sample call for HappyTailList operation/method
 */
if ($happy->HappyTailList(new \StructType\HappyTailList()) !== false) {
    print_r($happy->getResult());
} else {
    print_r($happy->getLastError());
}
/**
 * Sample call for HappyTailDetails operation/method
 */
if ($happy->HappyTailDetails(new \StructType\HappyTailDetails()) !== false) {
    print_r($happy->getResult());
} else {
    print_r($happy->getLastError());
}
