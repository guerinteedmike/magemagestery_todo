<?php
declare(strict_types=1);

namespace Guerinteed\Todo\Service;

use Guerinteed\Todo\Api\Data\TaskInterface;
use Guerinteed\Todo\Api\TaskManagementInterface;
use Guerinteed\Todo\Model\ResourceModel\Task as TaskResource;

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

    public function save(TaskInterface $task)
    {
        $this->resource->save($task);
    }

    public function delete(TaskInterface $task)
    {
        $this->resource->delete($task);
    }
}
