<?php
/**
 * Created by Metagento.com
 * Date: 9/7/2018
 */

namespace Metagento\StockQty\Block\Catalog\Product;


class View extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magento\Framework\Registry
     */
    protected $registry;
    /**
     * @var \Metagento\StockQty\Helper\Config
     */
    protected $helperConfig;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Metagento\StockQty\Helper\Config $helperConfig,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        $this->registry     = $registry;
        $this->helperConfig = $helperConfig;
        parent::__construct($context, $data);
    }


    /**
     * @return \Metagento\StockQty\Helper\Config
     */
    public function getHelperConfig()
    {
        return $this->helperConfig;
    }

    /**
     * @return \Magento\Catalog\Model\Product
     */
    public function getProduct()
    {
        return $this->registry->registry('product');
    }

}