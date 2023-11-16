<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFrequentFlyerNumbersResponse StructType
 * @subpackage Structs
 */
class GetFrequentFlyerNumbersResponse extends AbstractStructBase
{
    /**
     * The MidocoFrequentFlyerNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFrequentFlyerNumber
     * @var \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO[]
     */
    protected array $MidocoFrequentFlyerNumber = [];
    /**
     * Constructor method for GetFrequentFlyerNumbersResponse
     * @uses GetFrequentFlyerNumbersResponse::setMidocoFrequentFlyerNumber()
     * @param \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO[] $midocoFrequentFlyerNumber
     */
    public function __construct(array $midocoFrequentFlyerNumber = [])
    {
        $this
            ->setMidocoFrequentFlyerNumber($midocoFrequentFlyerNumber);
    }
    /**
     * Get MidocoFrequentFlyerNumber value
     * @return \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO[]
     */
    public function getMidocoFrequentFlyerNumber(): array
    {
        return $this->MidocoFrequentFlyerNumber;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoFrequentFlyerNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFrequentFlyerNumber method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFrequentFlyerNumberForArrayConstraintsFromSetMidocoFrequentFlyerNumber(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getFrequentFlyerNumbersResponseMidocoFrequentFlyerNumberItem) {
            // validation for constraint: itemType
            if (!$getFrequentFlyerNumbersResponseMidocoFrequentFlyerNumberItem instanceof \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO) {
                $invalidValues[] = is_object($getFrequentFlyerNumbersResponseMidocoFrequentFlyerNumberItem) ? get_class($getFrequentFlyerNumbersResponseMidocoFrequentFlyerNumberItem) : sprintf('%s(%s)', gettype($getFrequentFlyerNumbersResponseMidocoFrequentFlyerNumberItem), var_export($getFrequentFlyerNumbersResponseMidocoFrequentFlyerNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFrequentFlyerNumber property can only contain items of type \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFrequentFlyerNumber value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO[] $midocoFrequentFlyerNumber
     * @return \Pggns\MidocoApi\Crm\StructType\GetFrequentFlyerNumbersResponse
     */
    public function setMidocoFrequentFlyerNumber(array $midocoFrequentFlyerNumber = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFrequentFlyerNumberArrayErrorMessage = self::validateMidocoFrequentFlyerNumberForArrayConstraintsFromSetMidocoFrequentFlyerNumber($midocoFrequentFlyerNumber))) {
            throw new InvalidArgumentException($midocoFrequentFlyerNumberArrayErrorMessage, __LINE__);
        }
        $this->MidocoFrequentFlyerNumber = $midocoFrequentFlyerNumber;
        
        return $this;
    }
    /**
     * Add item to MidocoFrequentFlyerNumber value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetFrequentFlyerNumbersResponse
     */
    public function addToMidocoFrequentFlyerNumber(\Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoFrequentFlyerNumber property can only contain items of type \Pggns\MidocoApi\Crm\StructType\FrequentFlyerNumberDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFrequentFlyerNumber[] = $item;
        
        return $this;
    }
}
