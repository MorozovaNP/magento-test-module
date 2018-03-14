<?php

namespace Morozova\Test\Model;

use Morozova\Test\Api\Data\RemarkInterface;
use Magento\Framework\Model\AbstractModel;

/**
 * Class Remark
 * @package Morozova\Test\Model
 */
class Remark extends AbstractModel implements RemarkInterface
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Morozova\Test\Model\ResourceModel\Remark::class);
    }

    /**
     * Retrieve remark id
     *
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::REMARK_ID);
    }

    /**
     * Retrieve remark title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * Retrieve remark content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    /**
     * Retrieve remark creation time
     *
     * @return string
     */
    public function getCreationTime()
    {
        return $this->getData(self::CREATION_TIME);
    }

    /**
     * Retrieve remark update time
     *
     * @return string
     */
    public function getUpdateTime()
    {
        return $this->getData(self::UPDATE_TIME);
    }

    /**
     * Retrieve remark type
     *
     * @return string
     */
    public function getRemarkType()
    {
        return $this->getData(self::REMARK_TYPE);
    }

    /**
     * Set ID
     *
     * @param int $id
     * @return RemarkInterface
     */
    public function setId($id)
    {
        return $this->setData(self::REMARK_ID, $id);
    }

    /**
     * Set title
     *
     * @param string $title
     * @return RemarkInterface
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    /**
     * Set content
     *
     * @param string $content
     * @return RemarkInterface
     */
    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return RemarkInterface
     */
    public function setCreationTime($creationTime)
    {
        return $this->setData(self::CREATION_TIME, $creationTime);
    }

    /**
     * Set update time
     *
     * @param string $updateTime
     * @return RemarkInterface
     */
    public function setUpdateTime($updateTime)
    {
        return $this->setData(self::UPDATE_TIME, $updateTime);
    }

    /**
     * Set is active
     *
     * @param string $remarkType
     * @return RemarkInterface
     */
    public function setRemarkType($remarkType)
    {
        return $this->setData(self::REMARK_TYPE, $remarkType);
    }
}
