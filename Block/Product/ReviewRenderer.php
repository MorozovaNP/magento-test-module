<?php

namespace Morozova\Test\Block\Product;

/**
 * Class ReviewRenderer
 * @package Morozova\Test\Block\Product
 */
class ReviewRenderer extends \Magento\Review\Block\Product\Review
{
    /**
     * @var \Morozova\Test\Model\Config
     */
    protected $config;

    /**
     * ReviewRenderer constructor.
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Review\Model\ResourceModel\Review\CollectionFactory $collectionFactory
     * @param \Morozova\Test\Model\Config $config
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry,
        \Magento\Review\Model\ResourceModel\Review\CollectionFactory $collectionFactory,
        \Morozova\Test\Model\Config $config,
        array $data = []
    ) {
        parent::__construct($context, $registry, $collectionFactory, $data);
        $this->config = $config;
    }

    /**
     * Set page title with count of product reviews.
     */
    public function setPageTitleWithReviewsCount()
    {
        if ($this->config->isDisplayReviewCount()) {
            /** @var \Magento\Theme\Block\Html\Title $parentBlock */
            $parentBlock = $this->getParentBlock();
            $newTitle = $parentBlock->getPageTitle() . ' ' . $this->getCollectionSize();
            $parentBlock->setPageTitle($newTitle);
        }
    }
}
