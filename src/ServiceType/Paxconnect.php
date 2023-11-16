<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Paxconnect ServiceType
 * @subpackage Services
 */
class Paxconnect extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Crm\ServiceType\Paxconnect
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named paxconnectNotifyAdvisoryPublished
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\PaxconnectNotifyAdvisoryPublishedRequest $paramPaxconnectNotifyAdvisoryPublishedRequest
     * @return \Pggns\MidocoApi\Crm\StructType\PaxconnectNotifyAdvisoryPublishedResponse|bool
     */
    public function paxconnectNotifyAdvisoryPublished(\Pggns\MidocoApi\Crm\StructType\PaxconnectNotifyAdvisoryPublishedRequest $paramPaxconnectNotifyAdvisoryPublishedRequest)
    {
        try {
            $this->setResult($resultPaxconnectNotifyAdvisoryPublished = $this->getSoapClient()->__soapCall('paxconnectNotifyAdvisoryPublished', [
                $paramPaxconnectNotifyAdvisoryPublishedRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPaxconnectNotifyAdvisoryPublished;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Crm\StructType\PaxconnectNotifyAdvisoryPublishedResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
