<?php

namespace Morozova\Test\Model\ResourceModel;

use Morozova\Test\Api\Data\RemarkInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Remark
 * @package Morozova\Test\Model\ResourceModel
 */
class Remark extends AbstractDb
{
    /**
     * Remark table name
     */
    const TABLE_NAME = 'morozova_test_remark';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, RemarkInterface::REMARK_ID);
    }
}
