<?php

namespace Knp\Component\Pager\Event;

use Symfony\Contracts\EventDispatcher\Event;

/**
 * Specific Event class for paginator
 */
final class ItemsEvent extends Event
{
    /**
     * A target being paginated
     *
     * @var mixed
     */
    public $target;

    /**
     * List of options
     */
    public array $options;

    /**
     * Items result
     *
     * @var mixed
     */
    public $items;

    /**
     * Count result
     */
    public int $count;

    private int $offset;
    private int $limit;
    private array $customPaginationParams = [];

    public function __construct(int $offset, int $limit)
    {
        $this->offset = $offset;
        $this->limit = $limit;
    }

    public function setCustomPaginationParameter($name, $value): void
    {
        $this->customPaginationParams[$name] = $value;
    }

    public function getCustomPaginationParameters(): array
    {
        return $this->customPaginationParams;
    }

    public function unsetCustomPaginationParameter($name): void
    {
        if (isset($this->customPaginationParams[$name])) {
            unset($this->customPaginationParams[$name]);
        }
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }
}
