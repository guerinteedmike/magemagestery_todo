<?php
declare(strict_types=1);

namespace Guerinteed\Todo\Service;

use Guerinteed\Todo\Api\TaskManagementInterface;
use Guerinteed\Todo\Api\TaskRepositoryInterface;
use Guerinteed\Todo\Model\Task;

class TaskStatusManagement implements \Guerinteed\Todo\Api\TaskStatusManagementInterface
{
    /**
     * @var TaskRepositoryInterface
     */
    private $repository;

    /**
     * @var TaskManagementInterface
     */
    private $management;

    /**
     * TaskStatusManagement constructor.
     * @param TaskRepositoryInterface $repository
     * @param TaskManagementInterface $management
     */
    public function __construct(TaskRepositoryInterface $repository, TaskManagementInterface $management)
    {
        $this->repository = $repository;
        $this->management = $management;
    }

    /**
     * @param int $taskId
     * @param string $status
     * @return bool
     */
    public function change(int $taskId, string $status): bool
    {
        if (!in_array($status, ['open', 'complete'])) {
            return false;
        }

        /** @var Task $task */
        $task = $this->repository->get($taskId);
        $task->setData(Task::STATUS, $status);

        $this->management->save($task);

        return true;
    }
}
