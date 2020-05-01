<?php
declare(strict_types=1);

namespace Guerinteed\Todo\Service;

use Guerinteed\Todo\Api\Data\TaskInterface;
use Guerinteed\Todo\Api\TaskRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;

class CustomerTaskList implements \Guerinteed\Todo\Api\Data\CustomerTaskListInterface
{
    /**
     * @var TaskRepositoryInterface;
     */
    private $taskRepository;

    /**
     * @var SearchCriteriaBuilder
     */
    private $searchCriteriaBuilder;

    /**
     * CustomerTaskList constructor.
     * @param TaskRepositoryInterface $taskRepository
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     */
    public function __construct(TaskRepositoryInterface $taskRepository, SearchCriteriaBuilder $searchCriteriaBuilder)
    {
        $this->taskRepository = $taskRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
    }

    /**
     * @return TaskInterface[]
     */
    public function getList()
    {
        return $this->taskRepository
            ->getList($this->searchCriteriaBuilder->create())
            ->getItems();
    }
}
