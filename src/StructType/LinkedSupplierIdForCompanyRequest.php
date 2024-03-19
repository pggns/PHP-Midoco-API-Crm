<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LinkedSupplierIdForCompanyRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class LinkedSupplierIdForCompanyRequest extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * Constructor method for LinkedSupplierIdForCompanyRequest
     * @uses LinkedSupplierIdForCompanyRequest::setCustomerId()
     * @param int $customerId
     */
    public function __construct(?int $customerId = null)
    {
        $this
            ->setCustomerId($customerId);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Crm\StructType\LinkedSupplierIdForCompanyRequest
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
}
