<?php

namespace Morozova\Test\Model;

use Morozova\Test\Api\RemarkRepositoryInterface;
use Morozova\Test\Model\ResourceModel\Remark as RemarkResource;
use Morozova\Test\Api\Data\RemarkInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Class RemarkRepository
 * @package Morozova\Test\Model
 */
class RemarkRepository implements RemarkRepositoryInterface
{
    /**
     * @var RemarkResource
     */
    protected $resource;

    /**
     * @var RemarkFactory
     */
    protected $remarkFactory;

    /**
     * RemarkRepository constructor
     *
     * @param RemarkResource $resource
     * @param RemarkFactory $remarkFactory
     */
    public function __construct(
        RemarkResource $resource,
        RemarkFactory $remarkFactory
    ) {

        $this->resource = $resource;
        $this->remarkFactory = $remarkFactory;
    }

    /**
     * Save Block data
     *
     * @param RemarkInterface $remark
     * @return Remark
     * @throws CouldNotSaveException
     */
    public function save(RemarkInterface $remark)
    {
        try {
            $this->resource->save($remark);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }

        return $remark;
    }

    /**
     * Load Remark data by given Remark Identity
     *
     * @param int $remarkId
     * @return Remark
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($remarkId)
    {
        $remark = $this->remarkFactory->create();
        $this->resource->load($remark, $remarkId);
        if (!$remark->getId())
            throw new NoSuchEntityException(__('CMS Block with id "%1" does not exist.', $remarkId));

        return $remark;
    }

    /**
     * Delete Remark
     *
     * @param RemarkInterface $remark
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete(RemarkInterface $remark)
    {
        try {
            $this->resource->delete($remark);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }

        return true;
    }

    /**
     * Delete Remark by given Remark Identity
     *
     * @param int $remarkId
     * @return bool
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     */
    public function deleteById($remarkId)
    {
        return $this->delete($this->getById($remarkId));
    }
}
