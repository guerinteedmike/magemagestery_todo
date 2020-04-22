<?php
declare(strict_types=1);

namespace Guerinteed\Todo\Controller\Index;

use Guerinteed\Todo\Service\TaskRepository;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Guerinteed\Todo\Model\ResourceModel\Task as TaskResource;
use Guerinteed\Todo\Model\Task;
use Guerinteed\Todo\Model\TaskFactory;


/**
 * TODO index action
 *
 * @package Guerinteed\Todo\Controller\Index
 */
class Index extends Action
{
    /**
     * @var TaskResource
     */
    private $taskResource;

    /**
     * @var TaskFactory
     */
    private $taskFactory;

    /**
     * @var TaskRepository;
     */
    private $taskRepository;

    /**
     * Index constructor.
     * @param Context $context
     * @param TaskFactory $taskFactory
     * @param TaskResource $taskResource
     */
    public function __construct(
        Context $context,
        TaskFactory $taskFactory,
        TaskResource $taskResource,
        TaskRepository $taskRepository
    ) {
        $this->taskResource = $taskResource;
        $this->taskFactory = $taskFactory;
        $this->taskRepository = $taskRepository;
        parent::__construct($context);
    }

    /**
     * TODO index action.
     *
     * @return ResultFactory
     */
    public function execute()
    {
        $task = $this->taskRepository->get(1);

        var_dump($task->getData());

        /** @var Task $task */
        /*$task = $this->taskFactory->create();
        $task->setData([
            'label' => 'New Task 22',
            'status' => 'open',
            'customer_id' => 1
        ]);

        $this->taskResource->save($task);*/

        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
