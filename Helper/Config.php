<?php

namespace Metagento\StockQty\Helper;

class Config extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Retrieve config value
     *
     * @return string
     */
    public function getConfig($config)
    {
        return $this->scopeConfig->getValue(
            $config,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function isEnabled()
    {
        return $this->getConfig('stockqty/general/enabled');
    }
}
