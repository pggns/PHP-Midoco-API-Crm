<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateLanguagesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getTemplates --- get a list of templates languages
 * @subpackage Structs
 */
class GetTemplateLanguagesResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmTemplateLanguage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmTemplateLanguage
     * @var \Pggns\MidocoApi\Crm\StructType\CrmTemplateLanguageDTO[]
     */
    protected array $MidocoCrmTemplateLanguage = [];
    /**
     * Constructor method for GetTemplateLanguagesResponse
     * @uses GetTemplateLanguagesResponse::setMidocoCrmTemplateLanguage()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmTemplateLanguageDTO[] $midocoCrmTemplateLanguage
     */
    public function __construct(array $midocoCrmTemplateLanguage = [])
    {
        $this
            ->setMidocoCrmTemplateLanguage($midocoCrmTemplateLanguage);
    }
    /**
     * Get MidocoCrmTemplateLanguage value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmTemplateLanguageDTO[]
     */
    public function getMidocoCrmTemplateLanguage(): array
    {
        return $this->MidocoCrmTemplateLanguage;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmTemplateLanguage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmTemplateLanguage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmTemplateLanguageForArrayConstraintsFromSetMidocoCrmTemplateLanguage(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTemplateLanguagesResponseMidocoCrmTemplateLanguageItem) {
            // validation for constraint: itemType
            if (!$getTemplateLanguagesResponseMidocoCrmTemplateLanguageItem instanceof \Pggns\MidocoApi\Crm\StructType\CrmTemplateLanguageDTO) {
                $invalidValues[] = is_object($getTemplateLanguagesResponseMidocoCrmTemplateLanguageItem) ? get_class($getTemplateLanguagesResponseMidocoCrmTemplateLanguageItem) : sprintf('%s(%s)', gettype($getTemplateLanguagesResponseMidocoCrmTemplateLanguageItem), var_export($getTemplateLanguagesResponseMidocoCrmTemplateLanguageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmTemplateLanguage property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CrmTemplateLanguageDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmTemplateLanguage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CrmTemplateLanguageDTO[] $midocoCrmTemplateLanguage
     * @return \Pggns\MidocoApi\Crm\StructType\GetTemplateLanguagesResponse
     */
    public function setMidocoCrmTemplateLanguage(array $midocoCrmTemplateLanguage = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmTemplateLanguageArrayErrorMessage = self::validateMidocoCrmTemplateLanguageForArrayConstraintsFromSetMidocoCrmTemplateLanguage($midocoCrmTemplateLanguage))) {
            throw new InvalidArgumentException($midocoCrmTemplateLanguageArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmTemplateLanguage = $midocoCrmTemplateLanguage;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmTemplateLanguage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CrmTemplateLanguageDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetTemplateLanguagesResponse
     */
    public function addToMidocoCrmTemplateLanguage(\Pggns\MidocoApi\Crm\StructType\CrmTemplateLanguageDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\CrmTemplateLanguageDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmTemplateLanguage property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CrmTemplateLanguageDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmTemplateLanguage[] = $item;
        
        return $this;
    }
}
