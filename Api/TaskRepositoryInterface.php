<?php
declare(strict_types=1);

namespace Guerinteed\Todo\Api;

use Guerinteed\Todo\Api\Data\TaskSearchResultsInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface TaskRepositoryInterface
 *
 * @api
 */
interface TaskRepositoryInterface
{
    public function getList(SearchCriteriaInterface $searchCriteria): TaskSearchResultsInterface;
    public function get(int $taskId);
}
