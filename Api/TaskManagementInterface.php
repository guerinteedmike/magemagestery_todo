<?php
declare(strict_types=1);

namespace Guerinteed\Todo\Api;

use Guerinteed\Todo\Api\Data\TaskInterface;

/**
 * Interface TaskManagementInterface
 *
 * @api
 */
interface TaskManagementInterface
{
    /**
     * @param TaskInterface $task
     * @return bool
     */
    public function save(TaskInterface $task): bool;

    /**
     * @param TaskInterface $task
     * @return bool
     */
    public function delete(TaskInterface $task): bool;
}
