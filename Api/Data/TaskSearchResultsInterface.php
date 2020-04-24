<?php
declare(strict_types=1);

namespace Guerinteed\Todo\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * api
 */
interface TaskSearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return TaskInterface[]
     */
    public function getItems();

    /**
     * @param TaskInterface[] $items
     * @return TaskSearchResultsInterface
     */
    public function setItems(array $items);
}
