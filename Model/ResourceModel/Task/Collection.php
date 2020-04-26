<?php
declare(strict_types=1);

namespace Guerinteed\Todo\Model\ResourceModel\Task;

use Guerinteed\Todo\Api\Data\TaskSearchResultsInterface;
use Guerinteed\Todo\Model\ResourceModel\Task as TaskResource;
use Guerinteed\Todo\Model\Task;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection implements TaskSearchResultsInterface
{
    /**
     * @var SearchCriteriaInterface
     */
    protected $searchCriteria;

    protected function _construct()
    {
        $this->_init(Task::class, TaskResource::class);
    }

    /**
     * @return \Magento\Framework\Api\SearchCriteriaInterface|null
     */
    public function getSearchCriteria()
    {
        return $this->searchCriteria;
    }

    /**
     * @param SearchCriteriaInterface|null $searchCriteria
     * @return $this|Collection
     * @SuppressWarnings(PHPMD.UnusedFormulaParameter)
     */
    public function setSearchCriteria(SearchCriteriaInterface $searchCriteria = null)
    {
        $this->searchCriteria = $searchCriteria;
        return $this;
    }

    /**
     * Get total count.
     *
     * @return int
     */
    public function getTotalCount()
    {
        return $this->getSize();
    }

    /**
     * @param int $totalCount
     * @return $this
     * @SuppressWarnings(PHPMD.UnusedFormulaParameter)
     */
    public function setTotalCount($totalCount)
    {
        return $this;
    }

    /**
     * @param array|null $items
     * @return $this
     * @throws \Exception
     */
    public function setItems(array $items = null)
    {
        if (!$items) {
            return $this;
        }
        foreach ($items as $item) {
            $this->addItem($item);
        }
        return $this;
    }
}
