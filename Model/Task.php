<?php
declare(strict_types=1);

namespace Guerinteed\Todo\Model;

use Guerinteed\Todo\Model\ResourceModel\Task as TaskResource;
use Magento\Framework\Model\AbstractModel;

class Task extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(TaskResource::class);
    }
}
