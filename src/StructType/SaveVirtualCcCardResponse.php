<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveVirtualCcCardResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveVirtualCcCardResponse extends AbstractStructBase
{
    /**
     * The MidocoVirtualCcCard
     * Meta information extracted from the WSDL
     * - ref: MidocoVirtualCcCard
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCard|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCard $MidocoVirtualCcCard = null;
    /**
     * Constructor method for SaveVirtualCcCardResponse
     * @uses SaveVirtualCcCardResponse::setMidocoVirtualCcCard()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCard $midocoVirtualCcCard
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCard $midocoVirtualCcCard = null)
    {
        $this
            ->setMidocoVirtualCcCard($midocoVirtualCcCard);
    }
    /**
     * Get MidocoVirtualCcCard value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCard|null
     */
    public function getMidocoVirtualCcCard(): ?\Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCard
    {
        return $this->MidocoVirtualCcCard;
    }
    /**
     * Set MidocoVirtualCcCard value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCard $midocoVirtualCcCard
     * @return \Pggns\MidocoApi\Crm\StructType\SaveVirtualCcCardResponse
     */
    public function setMidocoVirtualCcCard(?\Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCard $midocoVirtualCcCard = null): self
    {
        $this->MidocoVirtualCcCard = $midocoVirtualCcCard;
        
        return $this;
    }
}
