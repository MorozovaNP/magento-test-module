<?php

namespace Morozova\Test\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Adapter\AdapterInterface;
use Morozova\Test\Api\Data\RemarkInterface;
use Morozova\Test\Model\ResourceModel\Remark as RemarkResource;

/**
 * Class InstallSchema
 * @package Morozova\Test\Setup
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        /**
         * Create Remark table
         */
        $table = $installer->getConnection()->newTable(
            $installer->getTable(RemarkResource::TABLE_NAME)
        )->addColumn(
            RemarkInterface::REMARK_ID,
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'nullable' => false, 'primary' => true],
            'Remark ID'
        )->addColumn(
            RemarkInterface::TITLE,
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Remark Title'
        )->addColumn(
            RemarkInterface::CONTENT,
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            '64k',
            ['nullable' => false],
            'Remark Content'
        )->addColumn(
            RemarkInterface::REMARK_TYPE,
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Remark type'
        )->addColumn(
            RemarkInterface::CREATION_TIME,
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
            'Remark Creation Time'
        )->addColumn(
            RemarkInterface::UPDATE_TIME,
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],
            'Remark Modification Time'
        )->addIndex(
            $setup->getIdxName(
                $installer->getTable(RemarkResource::TABLE_NAME),
                [RemarkInterface::TITLE, RemarkInterface::CONTENT],
                AdapterInterface::INDEX_TYPE_FULLTEXT
            ),
            [RemarkInterface::TITLE, RemarkInterface::CONTENT],
            ['type' => AdapterInterface::INDEX_TYPE_FULLTEXT]
        )->setComment(
            'Morozova Test Remark Table'
        );
        $installer->getConnection()->createTable($table);

        $installer->endSetup();
    }
}
