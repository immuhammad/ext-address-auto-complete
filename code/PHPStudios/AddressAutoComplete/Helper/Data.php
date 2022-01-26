<?php

namespace PHPStudios\AddressAutoComplete\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Data
 * @package PHPStudios\AddressAutoComplete\Helper
 */
class Data extends AbstractHelper
{
    /**
     * Data constructor.
     * @param Context $context
     */
    public function __construct(
        Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * @param $configField
     * @return bool
     */
    public function getConfigFlag($configField)
    {
        return $this->scopeConfig->isSetFlag(
            $configField,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @param $configField
     * @param null $store
     * @return mixed
     */
    public function getConfigValue($configField, $store = null)
    {
        return $this->scopeConfig->getValue(
            $configField,
            ScopeInterface::SCOPE_STORE,
            $store
        );
    }
}
