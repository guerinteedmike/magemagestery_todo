<?php
declare(strict_types=1);

namespace Guerinteed\Todo\Model\ResourceModel\Task;

use Magento\Catalog\Model\ResourceModel\AbstractCollection;
use Guerinteed\Todo\Model\Task;
use Guerinteed\Todo\Model\ResourceModel\Task as TaskResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Task::class, TaskResource::class);
    }

}
