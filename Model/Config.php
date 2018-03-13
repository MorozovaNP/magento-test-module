<?php

namespace Morozova\Test\Model;

/**
 * Class Config
 * @package Morozova\Test\Model
 */
class Config
{
    /**
     * Category filter config path.
     */
    const XML_PATH_CATEGORY_FILTER = 'morozova_test/category/filter';

    /**
     * Display review count config path.
     */
    const XML_PATH_DISPLAY_REVIEW_COUNT = 'morozova_test/product/review_count';

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * Config constructor.
     *
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Get category filter.
     *
     * @return string
     */
    public function getCategoryFilter()
    {
        return $this->scopeConfig->getValue(self::XML_PATH_CATEGORY_FILTER);
    }

    /**
     * Display review count flag.
     *
     * @return bool
     */
    public function isDisplayReviewCount()
    {
        return $this->scopeConfig->isSetFlag(self::XML_PATH_DISPLAY_REVIEW_COUNT);
    }
}
