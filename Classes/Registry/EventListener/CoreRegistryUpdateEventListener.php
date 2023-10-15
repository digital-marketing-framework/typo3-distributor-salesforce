<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Salesforce\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Salesforce\DistributorSalesforceInitialization;
use DigitalMarketingFramework\Typo3\Core\Registry\EventListener\AbstractCoreRegistryUpdateEventListener;

class CoreRegistryUpdateEventListener extends AbstractCoreRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorSalesforceInitialization('dmf_distributor_salesforce'));
    }
}
