<?php

namespace Metagento\LazyLoad\Plugin\Block\Product;

class Image
{
    /**
     * @var \Metagento\LazyLoad\Helper\Data
     */
    protected $helper;

    /**
     * Image constructor.
     * @param \Metagento\LazyLoad\Helper\Data $helper
     */
    public function __construct(
        \Metagento\LazyLoad\Helper\Data $helper
    ) {
        $this->helper = $helper;
    }

    public function afterToHtml(\Magento\Catalog\Block\Product\Image $subject, $result)
    {
        if ($this->helper->isEnabled() && $this->helper->applyLazyLoad()) {
            $find    = 'img class="';
            $replace = 'img class="lazy swatch-option-loading ';
            return str_replace($find, $replace, $result);
        }
        return $result;
    }

    public function beforeToHtml(\Magento\Catalog\Block\Product\Image $subject)
    {
        if ($this->helper->isEnabled() && $this->helper->applyLazyLoad()) {
            $customAttributes = trim($subject->getCustomAttributes() . ' data-original="' . $subject->getImageUrl() . '"');
            $subject->setImageUrl('');
            $subject->setCustomAttributes($customAttributes);
        }
        return [$subject];
    }
}
