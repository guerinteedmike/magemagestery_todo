<?php

namespace Guerinteed\Todo\Api;

/**
 * Interface TaskRepositoryInterface
 *
 * @api
 */
interface TaskRepositoryInterface
{
    public function getList();
    public function get(int $taskId);
}
