<?php
declare(strict_types=1);

namespace Guerinteed\Todo\Controller\Index;

use Guerinteed\Todo\Api\TaskManagementInterface;
use Guerinteed\Todo\Service\TaskRepository;
use Magento\Framework\Api\Search\SearchCriteriaBuilder;
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
     * @var SearchCriteriaBuilder
     */
    private $searchCriteriaBuilder;

    /**
     * @var TaskManagementInterface
     */
    private $taskManagement;

    /**
     * Index constructor.
     * @param Context $context
     * @param TaskFactory $taskFactory
     * @param TaskResource $taskResource
     * @param TaskRepository $taskRepository
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     * @param TaskManagementInterface $taskManagement
     */
    public function __construct(
        Context $context,
        TaskFactory $taskFactory,
        TaskResource $taskResource,
        TaskRepository $taskRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        TaskManagementInterface $taskManagement
    ) {
        $this->taskResource = $taskResource;
        $this->taskFactory = $taskFactory;
        $this->taskRepository = $taskRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->taskManagement = $taskManagement;
        parent::__construct($context);
    }

    /**
     * TODO index action.
     *
     * @return ResultFactory
     */
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
