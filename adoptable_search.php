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

$root_dir = dirname(__DIR__) . '/php-petango';

/**
 * Expose global env() function from oscarotero/env
 */
Env::init();

/**
 * Use Dotenv to set required environment variables and load .env file in root
 */
$dotenv = new Dotenv\Dotenv($root_dir);
if (file_exists($root_dir . '/.env')) {
    $dotenv->load();
    $dotenv->required(['AUTH_KEY']);
}

define('AUTH_KEY', env('AUTH_KEY'));

/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'PetangoSvc.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
);

/**
 * Samples for Adoptable ServiceType
 */
$adoptable = new \ServiceType\Adoptable($options);
/**
 * Sample call for AdoptableSearch operation/method
 */

if ($adoptable->AdoptableSearch(new \StructType\AdoptableSearch(AUTH_KEY, "", "", "", "", "", "", "", "", "", "", "", "", "", "")) !== false) {
    print_r($adoptable->getResult());
} else {
    var_dump( $adoptable->getLastError() );
}
