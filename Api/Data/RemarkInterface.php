<?php

namespace Morozova\Test\Api\Data;

/**
 * Interface RemarkInterface
 * @package Morozova\Test\Api\Data
 */
interface RemarkInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const REMARK_ID     = 'remark_id';
    const TITLE         = 'title';
    const CONTENT       = 'content';
    const CREATION_TIME = 'creation_time';
    const UPDATE_TIME   = 'update_time';
    const REMARK_TYPE   = 'remark_type';
    /**#@-*/

    /**
     * Get ID
     *
     * @return int
     */
    public function getId();

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle();

    /**
     * Get content
     *
     * @return string
     */
    public function getContent();

    /**
     * Get creation time
     *
     * @return string
     */
    public function getCreationTime();

    /**
     * Get update time
     *
     * @return string
     */
    public function getUpdateTime();

    /**
     * Get remark type
     *
     * @return string
     */
    public function getRemarkType();

    /**
     * Set ID
     *
     * @param int $id
     * @return RemarkInterface
     */
    public function setId($id);

    /**
     * Set title
     *
     * @param string $title
     * @return RemarkInterface
     */
    public function setTitle($title);

    /**
     * Set content
     *
     * @param string $content
     * @return RemarkInterface
     */
    public function setContent($content);

    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return RemarkInterface
     */
    public function setCreationTime($creationTime);

    /**
     * Set update time
     *
     * @param string $updateTime
     * @return RemarkInterface
     */
    public function setUpdateTime($updateTime);

    /**
     * Set remark type
     *
     * @param string $remarkType
     * @return RemarkInterface
     */
    public function setRemarkType($remarkType);
}
