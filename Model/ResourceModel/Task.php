<?php
declare(strict_types=1);

namespace Guerinteed\Todo\Model\ResourceModel;

class Task extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->$this->_init(guerinteed_todo_task, task_id);
    }
}
