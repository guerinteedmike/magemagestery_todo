<?php
declare(strict_types=1);

namespace Guerinteed\Todo\Api;

use Guerinteed\Todo\Api\Data\TaskInterface;
use Guerinteed\Todo\Api\Data\TaskSearchResultsInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface TaskRepositoryInterface
 *
 * @api
 */
interface TaskRepositoryInterface
{
    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return TaskSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): TaskSearchResultsInterface;

    /**
     * @param int $taskId
     * @return TaskInterface
     */
    public function get(int $taskId): TaskInterface;
}
