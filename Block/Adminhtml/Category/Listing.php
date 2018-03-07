<?php

namespace Morozova\Test\Block\Adminhtml\Category;

class Listing extends \Magento\Backend\Block\Template
{
    /**
     * @var \Morozova\Test\Model\ResourceModel\Category\CollectionFactory
     */
    protected $categoryCollectionFactory;

    /**
     * Listing constructor.
     * @param \Morozova\Test\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory
     * @param \Magento\Backend\Block\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Morozova\Test\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory,
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->categoryCollectionFactory = $categoryCollectionFactory;
    }

    /**
     * @return \Magento\Framework\DataObject[]
     */
    public function getFilteredCategories()
    {
        $categoryCollection = $this->categoryCollectionFactory
            ->create()
            ->addAttributeToFilterCaseSensitive('name', ['like' => '%A%'])
            ->addAttributeToSelect('name');
        $categories = $categoryCollection->getItems();

        return $categories;
    }
}
