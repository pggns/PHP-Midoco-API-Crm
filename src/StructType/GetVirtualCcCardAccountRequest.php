<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVirtualCcCardAccountRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVirtualCcCardAccountRequest extends AbstractStructBase
{
    /**
     * The MidocoVirtualCcCardAccount
     * Meta information extracted from the WSDL
     * - ref: MidocoVirtualCcCardAccount
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCardAccount|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCardAccount $MidocoVirtualCcCardAccount = null;
    /**
     * Constructor method for GetVirtualCcCardAccountRequest
     * @uses GetVirtualCcCardAccountRequest::setMidocoVirtualCcCardAccount()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCardAccount $midocoVirtualCcCardAccount
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCardAccount $midocoVirtualCcCardAccount = null)
    {
        $this
            ->setMidocoVirtualCcCardAccount($midocoVirtualCcCardAccount);
    }
    /**
     * Get MidocoVirtualCcCardAccount value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCardAccount|null
     */
    public function getMidocoVirtualCcCardAccount(): ?\Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCardAccount
    {
        return $this->MidocoVirtualCcCardAccount;
    }
    /**
     * Set MidocoVirtualCcCardAccount value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCardAccount $midocoVirtualCcCardAccount
     * @return \Pggns\MidocoApi\Crm\StructType\GetVirtualCcCardAccountRequest
     */
    public function setMidocoVirtualCcCardAccount(?\Pggns\MidocoApi\Crm\StructType\MidocoVirtualCcCardAccount $midocoVirtualCcCardAccount = null): self
    {
        $this->MidocoVirtualCcCardAccount = $midocoVirtualCcCardAccount;
        
        return $this;
    }
}
