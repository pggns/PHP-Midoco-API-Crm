<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessibleComponentsByRoleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAccessibleComponentsByRoleRequest extends AbstractStructBase
{
    /**
     * The MidocoAccessibleComponentByRole
     * Meta information extracted from the WSDL
     * - ref: MidocoAccessibleComponentByRole
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoAccessibleComponentByRoleType|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoAccessibleComponentByRoleType $MidocoAccessibleComponentByRole = null;
    /**
     * Constructor method for GetAccessibleComponentsByRoleRequest
     * @uses GetAccessibleComponentsByRoleRequest::setMidocoAccessibleComponentByRole()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole = null)
    {
        $this
            ->setMidocoAccessibleComponentByRole($midocoAccessibleComponentByRole);
    }
    /**
     * Get MidocoAccessibleComponentByRole value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoAccessibleComponentByRoleType|null
     */
    public function getMidocoAccessibleComponentByRole(): ?\Pggns\MidocoApi\Crm\StructType\MidocoAccessibleComponentByRoleType
    {
        return $this->MidocoAccessibleComponentByRole;
    }
    /**
     * Set MidocoAccessibleComponentByRole value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole
     * @return \Pggns\MidocoApi\Crm\StructType\GetAccessibleComponentsByRoleRequest
     */
    public function setMidocoAccessibleComponentByRole(?\Pggns\MidocoApi\Crm\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole = null): self
    {
        $this->MidocoAccessibleComponentByRole = $midocoAccessibleComponentByRole;
        
        return $this;
    }
}
