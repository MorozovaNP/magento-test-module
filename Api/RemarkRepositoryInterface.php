<?php

namespace Morozova\Test\Api;

/**
 * Interface RemarkRepositoryInterface
 * @package Morozova\Test\Api
 */
interface RemarkRepositoryInterface
{
    /**
     * Save remark.
     *
     * @param \Morozova\Test\Api\Data\RemarkInterface $remark
     * @return \Morozova\Test\Api\Data\RemarkInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(Data\RemarkInterface $remark);

    /**
     * Retrieve remark.
     *
     * @param int $remarkId
     * @return \Morozova\Test\Api\Data\RemarkInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($remarkId);

    /**
     * Delete remark.
     *
     * @param \Morozova\Test\Api\Data\RemarkInterface $remark
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(Data\RemarkInterface $remark);

    /**
     * Delete remark by ID.
     *
     * @param int $remarkId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($remarkId);
}
