<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDebitorRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveDebitorRequest extends AbstractStructBase
{
    /**
     * The MidocoDebitor
     * Meta information extracted from the WSDL
     * - ref: MidocoDebitor
     * @var \Pggns\MidocoApi\Crm\StructType\DebitorDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\DebitorDTO $MidocoDebitor = null;
    /**
     * Constructor method for SaveDebitorRequest
     * @uses SaveDebitorRequest::setMidocoDebitor()
     * @param \Pggns\MidocoApi\Crm\StructType\DebitorDTO $midocoDebitor
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\DebitorDTO $midocoDebitor = null)
    {
        $this
            ->setMidocoDebitor($midocoDebitor);
    }
    /**
     * Get MidocoDebitor value
     * @return \Pggns\MidocoApi\Crm\StructType\DebitorDTO|null
     */
    public function getMidocoDebitor(): ?\Pggns\MidocoApi\Crm\StructType\DebitorDTO
    {
        return $this->MidocoDebitor;
    }
    /**
     * Set MidocoDebitor value
     * @param \Pggns\MidocoApi\Crm\StructType\DebitorDTO $midocoDebitor
     * @return \Pggns\MidocoApi\Crm\StructType\SaveDebitorRequest
     */
    public function setMidocoDebitor(?\Pggns\MidocoApi\Crm\StructType\DebitorDTO $midocoDebitor = null): self
    {
        $this->MidocoDebitor = $midocoDebitor;
        
        return $this;
    }
}
