<?php
declare(strict_types=1);

namespace Guerinteed\Todo\Model;

use Guerinteed\Todo\Api\Data\TaskInterface;
use Guerinteed\Todo\Model\ResourceModel\Task as TaskResource;
use Magento\Framework\Model\AbstractModel;

class Task extends AbstractModel implements TaskInterface
{
    /**
     * Constants - same as database named in snake case
     */
    const TASK_ID = 'task_id';
    const STATUS = 'status';
    const LABEL = 'label';

    /**
     * Initializer method.
     */
    protected function _construct()
    {
        $this->_init(TaskResource::class);
    }

    /**
     * @return int
     */
    public function getTaskId(): int
    {
        return (int) $this->getData(self::TASK_ID);
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->getData(self::STATUS);
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->getData(self::LABEL);
    }

    /**
     * @param int $taskId
     */
    public function setTaskId(int $taskId)
    {
        $this->setData(self::TASK_ID, $taskId);
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->setData(self::STATUS, $status);
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label)
    {
        $this->setData(self::LABEL, $label);
    }
}
