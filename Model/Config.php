<?php

namespace Morozova\Test\Model;

/**
 * Class Config
 * @package Morozova\Test\Model
 */
class Config
{
    /**
     * Category filter config path
     */
    const XML_PATH_CATEGORY_FILTER = 'morozova_test/category/filter';

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
}
