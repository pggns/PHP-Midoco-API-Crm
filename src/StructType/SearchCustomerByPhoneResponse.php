<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCustomerByPhoneResponse StructType
 * @subpackage Structs
 */
class SearchCustomerByPhoneResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerPhoneSearch
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerPhoneSearch
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCustomerPhoneSearch[]
     */
    protected array $MidocoCustomerPhoneSearch = [];
    /**
     * The noOfResults
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for SearchCustomerByPhoneResponse
     * @uses SearchCustomerByPhoneResponse::setMidocoCustomerPhoneSearch()
     * @uses SearchCustomerByPhoneResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerPhoneSearch[] $midocoCustomerPhoneSearch
     * @param int $noOfResults
     */
    public function __construct(array $midocoCustomerPhoneSearch = [], ?int $noOfResults = null)
    {
        $this
            ->setMidocoCustomerPhoneSearch($midocoCustomerPhoneSearch)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get MidocoCustomerPhoneSearch value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerPhoneSearch[]
     */
    public function getMidocoCustomerPhoneSearch(): array
    {
        return $this->MidocoCustomerPhoneSearch;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustomerPhoneSearch method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerPhoneSearch method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerPhoneSearchForArrayConstraintsFromSetMidocoCustomerPhoneSearch(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchCustomerByPhoneResponseMidocoCustomerPhoneSearchItem) {
            // validation for constraint: itemType
            if (!$searchCustomerByPhoneResponseMidocoCustomerPhoneSearchItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCustomerPhoneSearch) {
                $invalidValues[] = is_object($searchCustomerByPhoneResponseMidocoCustomerPhoneSearchItem) ? get_class($searchCustomerByPhoneResponseMidocoCustomerPhoneSearchItem) : sprintf('%s(%s)', gettype($searchCustomerByPhoneResponseMidocoCustomerPhoneSearchItem), var_export($searchCustomerByPhoneResponseMidocoCustomerPhoneSearchItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerPhoneSearch property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCustomerPhoneSearch, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerPhoneSearch value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerPhoneSearch[] $midocoCustomerPhoneSearch
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerByPhoneResponse
     */
    public function setMidocoCustomerPhoneSearch(array $midocoCustomerPhoneSearch = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerPhoneSearchArrayErrorMessage = self::validateMidocoCustomerPhoneSearchForArrayConstraintsFromSetMidocoCustomerPhoneSearch($midocoCustomerPhoneSearch))) {
            throw new InvalidArgumentException($midocoCustomerPhoneSearchArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerPhoneSearch = $midocoCustomerPhoneSearch;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerPhoneSearch value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerPhoneSearch $item
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerByPhoneResponse
     */
    public function addToMidocoCustomerPhoneSearch(\Pggns\MidocoApi\Crm\StructType\MidocoCustomerPhoneSearch $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCustomerPhoneSearch) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerPhoneSearch property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCustomerPhoneSearch, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerPhoneSearch[] = $item;
        
        return $this;
    }
    /**
     * Get noOfResults value
     * @return int|null
     */
    public function getNoOfResults(): ?int
    {
        return $this->noOfResults;
    }
    /**
     * Set noOfResults value
     * @param int $noOfResults
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCustomerByPhoneResponse
     */
    public function setNoOfResults(?int $noOfResults = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfResults) && !(is_int($noOfResults) || ctype_digit($noOfResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfResults, true), gettype($noOfResults)), __LINE__);
        }
        $this->noOfResults = $noOfResults;
        
        return $this;
    }
}
