<?php

namespace Morozova\Test\Block\Adminhtml\Category;

/**
 * Class Listing
 * @package Morozova\Test\Block\Adminhtml\Category
 */
class Listing extends \Magento\Backend\Block\Template
{
    /**
     * @var \Morozova\Test\Model\ResourceModel\Category\CollectionFactory
     */
    protected $categoryCollectionFactory;

    /**
     * @var \Morozova\Test\Model\Config
     */
    protected $config;

    /**
     * Listing constructor.
     * @param \Morozova\Test\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Morozova\Test\Model\Config $config
     * @param array $data
     */
    public function __construct(
        \Morozova\Test\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory,
        \Magento\Backend\Block\Template\Context $context,
        \Morozova\Test\Model\Config $config,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->categoryCollectionFactory = $categoryCollectionFactory;
        $this->config = $config;
    }

    /**
     * @return \Magento\Framework\DataObject[]
     */
    public function getFilteredCategories()
    {
        $categoryFilter = $this->config->getCategoryFilter();
        $categoryCollection = $this->categoryCollectionFactory
            ->create()
            ->addAttributeToFilterCaseSensitive('name', ['like' => '%' . $categoryFilter . '%'])
            ->addAttributeToSelect('name');
        $categories = $categoryCollection->getItems();

        return $categories;
    }
}
