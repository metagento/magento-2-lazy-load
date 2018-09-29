<?php


namespace Metagento\LazyLoad\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    public static $ignored = 0;

    /**
     * @return mixed
     */
    public function isEnabled()
    {
        return $this->scopeConfig->getValue('lazyload/general/enabled',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return mixed
     */
    public function getIgnoreAmount()
    {
        return $this->scopeConfig->getValue('lazyload/general/ignore_amount',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * @return bool
     */
    public function applyLazyLoad()
    {
        if (self::$ignored < $this->getIgnoreAmount() * 2) {
            self::$ignored++;
            return false;
        }
        return true;
    }
}
