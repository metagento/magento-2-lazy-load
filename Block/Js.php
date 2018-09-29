<?php


namespace Metagento\LazyLoad\Block;

class Js extends \Magento\Framework\View\Element\Template
{

    /**
     * Js constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Metagento\LazyLoad\Helper\Data $helper
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Metagento\LazyLoad\Helper\Data $helper,
        array $data = []
    ) {
        $this->helper = $helper;
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    protected function _toHtml()
    {
        if (!$this->helper->isEnabled()) {
            return '';
        }
        return parent::_toHtml();
    }
}
