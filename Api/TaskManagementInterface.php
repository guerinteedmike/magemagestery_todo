<?php
declare(strict_types=1);

namespace Guerinteed\Todo\Api;

/**
 * Interface TaskManagementInterface
 *
 * @api
 */
interface TaskManagementInterface
{
    public function save();
    public function delete();
}
