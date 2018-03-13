<?php

namespace Morozova\Test\Controller\Adminhtml\Category;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Index
 * @package Morozova\Test\Controller\Adminhtml\Category
 */
class Index extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Morozova_Test::categories';

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @var \Morozova\Test\Model\Config
     */
    protected $config;

    /**
     * @param Context $context
     * @param \Morozova\Test\Model\Config $config
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        \Morozova\Test\Model\Config $config,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->config = $config;
    }

    /**
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Morozova_Test::test_categories');
        $resultPage->getConfig()->getTitle()->prepend(
            __('Categories, containing "%1" in name', $this->config->getCategoryFilter())
        );

        return $resultPage;
    }
}
