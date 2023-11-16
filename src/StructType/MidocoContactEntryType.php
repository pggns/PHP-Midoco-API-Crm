<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoContactEntryType StructType
 * @subpackage Structs
 */
class MidocoContactEntryType extends ContactEntryDTO
{
    /**
     * The MidocoContactSource
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactSource
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoContactSource[]
     */
    protected array $MidocoContactSource = [];
    /**
     * The mediaType
     * @var int|null
     */
    protected ?int $mediaType = null;
    /**
     * Constructor method for MidocoContactEntryType
     * @uses MidocoContactEntryType::setMidocoContactSource()
     * @uses MidocoContactEntryType::setMediaType()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactSource[] $midocoContactSource
     * @param int $mediaType
     */
    public function __construct(array $midocoContactSource = [], ?int $mediaType = null)
    {
        $this
            ->setMidocoContactSource($midocoContactSource)
            ->setMediaType($mediaType);
    }
    /**
     * Get MidocoContactSource value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoContactSource[]
     */
    public function getMidocoContactSource(): array
    {
        return $this->MidocoContactSource;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoContactSource method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactSource method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactSourceForArrayConstraintsFromSetMidocoContactSource(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoContactEntryTypeMidocoContactSourceItem) {
            // validation for constraint: itemType
            if (!$midocoContactEntryTypeMidocoContactSourceItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoContactSource) {
                $invalidValues[] = is_object($midocoContactEntryTypeMidocoContactSourceItem) ? get_class($midocoContactEntryTypeMidocoContactSourceItem) : sprintf('%s(%s)', gettype($midocoContactEntryTypeMidocoContactSourceItem), var_export($midocoContactEntryTypeMidocoContactSourceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactSource property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoContactSource, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactSource value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactSource[] $midocoContactSource
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType
     */
    public function setMidocoContactSource(array $midocoContactSource = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactSourceArrayErrorMessage = self::validateMidocoContactSourceForArrayConstraintsFromSetMidocoContactSource($midocoContactSource))) {
            throw new InvalidArgumentException($midocoContactSourceArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactSource = $midocoContactSource;
        
        return $this;
    }
    /**
     * Add item to MidocoContactSource value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactSource $item
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType
     */
    public function addToMidocoContactSource(\Pggns\MidocoApi\Crm\StructType\MidocoContactSource $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoContactSource) {
            throw new InvalidArgumentException(sprintf('The MidocoContactSource property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoContactSource, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactSource[] = $item;
        
        return $this;
    }
    /**
     * Get mediaType value
     * @return int|null
     */
    public function getMediaType(): ?int
    {
        return $this->mediaType;
    }
    /**
     * Set mediaType value
     * @param int $mediaType
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoContactEntryType
     */
    public function setMediaType(?int $mediaType = null): self
    {
        // validation for constraint: int
        if (!is_null($mediaType) && !(is_int($mediaType) || ctype_digit($mediaType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mediaType, true), gettype($mediaType)), __LINE__);
        }
        $this->mediaType = $mediaType;
        
        return $this;
    }
}
