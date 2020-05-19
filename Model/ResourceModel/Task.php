<?php
declare(strict_types=1);

namespace Guerinteed\Todo\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Tests\NamingConvention\true\string;

class Task extends AbstractDb
{

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('guerinteed_todo_task', 'task_id');
    }
}
