<?php
/**
 * Created by Metagento.com
 * Date: 9/7/2018
 */

namespace Metagento\StockQty\Controller\Index;


class Index extends \Magento\Framework\App\Action\Action
{
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\CatalogInventory\Api\StockStateInterface $stockState
    ) {
        parent::__construct($context);
        $this->stockState = $stockState;
    }


    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|\Magento\Framework\App\ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $html      = '';
        $productId = $this->getRequest()->getParam('product_id');
        if ($productId) {
            $stockQty = $this->stockState->getStockQty($productId);
            $html     = __("Qty: ") . $stockQty;
        }

        /** @var \Magento\Framework\Controller\Result\Json $result */
        $result = $this->resultFactory->create('json');
        return $result->setData(['content' => $html]);
    }
}