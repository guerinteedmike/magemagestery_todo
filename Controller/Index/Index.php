<?php
declare(strict_types=1);

namespace Guerinteed\Todo\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

/**
 * TODO index action.
 *
 * @package Guerinteed\Todo\Controller\Index
 */
class Index extends Action
{
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
