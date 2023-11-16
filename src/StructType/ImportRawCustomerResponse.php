<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportRawCustomerResponse StructType
 * @subpackage Structs
 */
class ImportRawCustomerResponse extends AbstractStructBase
{
    /**
     * The Error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:Error
     * @var \Pggns\MidocoApi\Crm\StructType\Error[]
     */
    protected array $Error = [];
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * Constructor method for ImportRawCustomerResponse
     * @uses ImportRawCustomerResponse::setError()
     * @uses ImportRawCustomerResponse::setCustomerId()
     * @param \Pggns\MidocoApi\Crm\StructType\Error[] $error
     * @param int $customerId
     */
    public function __construct(array $error = [], ?int $customerId = null)
    {
        $this
            ->setError($error)
            ->setCustomerId($customerId);
    }
    /**
     * Get Error value
     * @return \Pggns\MidocoApi\Crm\StructType\Error[]
     */
    public function getError(): array
    {
        return $this->Error;
    }
    /**
     * This method is responsible for validating the values passed to the setError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorForArrayConstraintsFromSetError(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importRawCustomerResponseErrorItem) {
            // validation for constraint: itemType
            if (!$importRawCustomerResponseErrorItem instanceof \Pggns\MidocoApi\Crm\StructType\Error) {
                $invalidValues[] = is_object($importRawCustomerResponseErrorItem) ? get_class($importRawCustomerResponseErrorItem) : sprintf('%s(%s)', gettype($importRawCustomerResponseErrorItem), var_export($importRawCustomerResponseErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Error property can only contain items of type \Pggns\MidocoApi\Crm\StructType\Error, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Error value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\Error[] $error
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerResponse
     */
    public function setError(array $error = []): self
    {
        // validation for constraint: array
        if ('' !== ($errorArrayErrorMessage = self::validateErrorForArrayConstraintsFromSetError($error))) {
            throw new InvalidArgumentException($errorArrayErrorMessage, __LINE__);
        }
        $this->Error = $error;
        
        return $this;
    }
    /**
     * Add item to Error value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\Error $item
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerResponse
     */
    public function addToError(\Pggns\MidocoApi\Crm\StructType\Error $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\Error) {
            throw new InvalidArgumentException(sprintf('The Error property can only contain items of type \Pggns\MidocoApi\Crm\StructType\Error, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Error[] = $item;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerResponse
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
