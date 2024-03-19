<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCustomerMfRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCustomerMfRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerMf
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerMf
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf $MidocoCustomerMf = null;
    /**
     * Constructor method for DeleteCustomerMfRequest
     * @uses DeleteCustomerMfRequest::setMidocoCustomerMf()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf $midocoCustomerMf
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf $midocoCustomerMf = null)
    {
        $this
            ->setMidocoCustomerMf($midocoCustomerMf);
    }
    /**
     * Get MidocoCustomerMf value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf|null
     */
    public function getMidocoCustomerMf(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf
    {
        return $this->MidocoCustomerMf;
    }
    /**
     * Set MidocoCustomerMf value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf $midocoCustomerMf
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteCustomerMfRequest
     */
    public function setMidocoCustomerMf(?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerMf $midocoCustomerMf = null): self
    {
        $this->MidocoCustomerMf = $midocoCustomerMf;
        
        return $this;
    }
}
