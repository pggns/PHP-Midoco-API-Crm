<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableLockReasonsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getLockReasons--- returns a list of lock reason for the given lock reason with parent-entries
 * @subpackage Structs
 */
class GetAvailableLockReasonsResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmLockReason
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmLockReason
     * @var \Pggns\MidocoApi\Crm\StructType\CrmLockReasonDTO[]
     */
    protected array $MidocoCrmLockReason = [];
    /**
     * Constructor method for GetAvailableLockReasonsResponse
     * @uses GetAvailableLockReasonsResponse::setMidocoCrmLockReason()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmLockReasonDTO[] $midocoCrmLockReason
     */
    public function __construct(array $midocoCrmLockReason = [])
    {
        $this
            ->setMidocoCrmLockReason($midocoCrmLockReason);
    }
    /**
     * Get MidocoCrmLockReason value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmLockReasonDTO[]
     */
    public function getMidocoCrmLockReason(): array
    {
        return $this->MidocoCrmLockReason;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmLockReason method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmLockReason method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmLockReasonForArrayConstraintsFromSetMidocoCrmLockReason(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableLockReasonsResponseMidocoCrmLockReasonItem) {
            // validation for constraint: itemType
            if (!$getAvailableLockReasonsResponseMidocoCrmLockReasonItem instanceof \Pggns\MidocoApi\Crm\StructType\CrmLockReasonDTO) {
                $invalidValues[] = is_object($getAvailableLockReasonsResponseMidocoCrmLockReasonItem) ? get_class($getAvailableLockReasonsResponseMidocoCrmLockReasonItem) : sprintf('%s(%s)', gettype($getAvailableLockReasonsResponseMidocoCrmLockReasonItem), var_export($getAvailableLockReasonsResponseMidocoCrmLockReasonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmLockReason property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CrmLockReasonDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmLockReason value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CrmLockReasonDTO[] $midocoCrmLockReason
     * @return \Pggns\MidocoApi\Crm\StructType\GetAvailableLockReasonsResponse
     */
    public function setMidocoCrmLockReason(array $midocoCrmLockReason = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmLockReasonArrayErrorMessage = self::validateMidocoCrmLockReasonForArrayConstraintsFromSetMidocoCrmLockReason($midocoCrmLockReason))) {
            throw new InvalidArgumentException($midocoCrmLockReasonArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmLockReason = $midocoCrmLockReason;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmLockReason value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CrmLockReasonDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetAvailableLockReasonsResponse
     */
    public function addToMidocoCrmLockReason(\Pggns\MidocoApi\Crm\StructType\CrmLockReasonDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\CrmLockReasonDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmLockReason property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CrmLockReasonDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmLockReason[] = $item;
        
        return $this;
    }
}
