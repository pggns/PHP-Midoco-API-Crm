<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmExternalOfferRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCrmExternalOfferRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmExternalOffer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmExternalOffer
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmExternalOffer|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmExternalOffer $MidocoCrmExternalOffer = null;
    /**
     * Constructor method for GetCrmExternalOfferRequest
     * @uses GetCrmExternalOfferRequest::setMidocoCrmExternalOffer()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmExternalOffer $midocoCrmExternalOffer
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmExternalOffer $midocoCrmExternalOffer = null)
    {
        $this
            ->setMidocoCrmExternalOffer($midocoCrmExternalOffer);
    }
    /**
     * Get MidocoCrmExternalOffer value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmExternalOffer|null
     */
    public function getMidocoCrmExternalOffer(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmExternalOffer
    {
        return $this->MidocoCrmExternalOffer;
    }
    /**
     * Set MidocoCrmExternalOffer value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmExternalOffer $midocoCrmExternalOffer
     * @return \Pggns\MidocoApi\Crm\StructType\GetCrmExternalOfferRequest
     */
    public function setMidocoCrmExternalOffer(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmExternalOffer $midocoCrmExternalOffer = null): self
    {
        $this->MidocoCrmExternalOffer = $midocoCrmExternalOffer;
        
        return $this;
    }
}
