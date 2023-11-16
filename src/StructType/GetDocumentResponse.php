<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getDocument --- returns a document corresponding to a given document id
 * @subpackage Structs
 */
class GetDocumentResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmDocument
     * @var \Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO $MidocoCrmDocument = null;
    /**
     * The documentContent
     * @var string|null
     */
    protected ?string $documentContent = null;
    /**
     * Constructor method for GetDocumentResponse
     * @uses GetDocumentResponse::setMidocoCrmDocument()
     * @uses GetDocumentResponse::setDocumentContent()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO $midocoCrmDocument
     * @param string $documentContent
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO $midocoCrmDocument = null, ?string $documentContent = null)
    {
        $this
            ->setMidocoCrmDocument($midocoCrmDocument)
            ->setDocumentContent($documentContent);
    }
    /**
     * Get MidocoCrmDocument value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO|null
     */
    public function getMidocoCrmDocument(): ?\Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO
    {
        return $this->MidocoCrmDocument;
    }
    /**
     * Set MidocoCrmDocument value
     * @param \Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO $midocoCrmDocument
     * @return \Pggns\MidocoApi\Crm\StructType\GetDocumentResponse
     */
    public function setMidocoCrmDocument(?\Pggns\MidocoApi\Crm\StructType\CrmDocumentDTO $midocoCrmDocument = null): self
    {
        $this->MidocoCrmDocument = $midocoCrmDocument;
        
        return $this;
    }
    /**
     * Get documentContent value
     * @return string|null
     */
    public function getDocumentContent(): ?string
    {
        return $this->documentContent;
    }
    /**
     * Set documentContent value
     * @param string $documentContent
     * @return \Pggns\MidocoApi\Crm\StructType\GetDocumentResponse
     */
    public function setDocumentContent(?string $documentContent = null): self
    {
        // validation for constraint: string
        if (!is_null($documentContent) && !is_string($documentContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentContent, true), gettype($documentContent)), __LINE__);
        }
        $this->documentContent = $documentContent;
        
        return $this;
    }
}
