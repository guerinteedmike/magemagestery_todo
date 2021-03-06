<?php
declare(strict_types=1);

namespace Guerinteed\Todo\Api;

use Guerinteed\Todo\Api\Data\TaskInterface;

/**
 * @api
 */
interface CustomerTaskListInterface
{
    /**
     * @return TaskInterface[]
     */
    public function getList();
}
