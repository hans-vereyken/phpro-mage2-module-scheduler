<?php
namespace Phpro\Scheduler\Model\ResourceModel\Schedule\Grid;

use Magento\Cron\Model\ResourceModel\Schedule;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;
use Magento\Framework\Data\Collection\Db\FetchStrategyInterface;
use Magento\Framework\Data\Collection\EntityFactoryInterface;
use Magento\Framework\Event\ManagerInterface;
use Psr\Log\LoggerInterface;

/**
 * Class Collection
 * @package Phpro\Scheduler\Model\ResourceModel\Schedule\Grid
 */
class Collection extends SearchResult
{
    /**
     * Collection constructor.
     * @param EntityFactoryInterface $entityFactory
     * @param LoggerInterface $logger
     * @param FetchStrategyInterface $fetchStrategy
     * @param ManagerInterface $eventManager
     * @param string $mainTable
     * @param string $resourceModel
     * @throws LocalizedException
     */
    public function __construct(
        EntityFactoryInterface $entityFactory,
        LoggerInterface $logger,
        FetchStrategyInterface $fetchStrategy,
        ManagerInterface $eventManager,
        string $mainTable = 'cron_schedule',
        string $resourceModel = Schedule::class
    ) {
        parent::__construct(
            $entityFactory,
            $logger,
            $fetchStrategy,
            $eventManager,
            $mainTable,
            $resourceModel
        );
    }
}
