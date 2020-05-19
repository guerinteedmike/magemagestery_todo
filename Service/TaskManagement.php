<?php
declare(strict_types=1);

namespace Guerinteed\Todo\Service;

use Guerinteed\Todo\Api\Data\TaskInterface;
use Guerinteed\Todo\Api\TaskManagementInterface;
use Guerinteed\Todo\Model\ResourceModel\Task as TaskResource;
use Magento\Framework\Exception\AlreadyExistsException;

class TaskManagement implements TaskManagementInterface
{
    /**
     * TaskResource
     */
    private $resource;

    /**
     * @param TaskResource $resource
     */
    public function __construct(
        TaskResource $resource
    ) {
        $this->resource = $resource;
    }

    /**
     * @param TaskInterface $task
     * @return bool
     * @throws AlreadyExistsException
     */
    public function save(TaskInterface $task): bool
    {
        $this->resource->save($task);
        return true;
    }

    /**
     * @param TaskInterface $task
     * @return bool
     * @throws \Exception
     */
    public function delete(TaskInterface $task): bool
    {
        $this->resource->delete($task);
        return true;
    }
}
