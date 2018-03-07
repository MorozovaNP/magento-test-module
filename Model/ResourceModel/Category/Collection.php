<?php

namespace Morozova\Test\Model\ResourceModel\Category;

class Collection extends \Magento\Catalog\Model\ResourceModel\Category\Collection
{
    /**
     * Add case sensitive attribute filter to collection
     *
     * @param string $attribute
     * @param null|string|array $condition
     * @param string $joinType
     * @return $this
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function addAttributeToFilterCaseSensitive(string $attribute, $condition = null, $joinType = 'inner')
    {
        if ($attribute === null) {
            $this->getSelect();
            return $this;
        }

        if ($condition === null)
            $condition = '';

        $conditionSql = $this->_getAttributeConditionSql($attribute, $condition, $joinType);

        if (!empty($conditionSql)) {
            $this->getSelect()->where('BINARY ' . $conditionSql, null, \Magento\Framework\DB\Select::TYPE_CONDITION);
        } else {
            throw new \Magento\Framework\Exception\LocalizedException(
                __('Invalid attribute identifier for filter (%1)', get_class($attribute))
            );
        }

        return $this;
    }
}
