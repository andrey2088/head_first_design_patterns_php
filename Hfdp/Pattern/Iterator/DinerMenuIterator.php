<?php

namespace Hfdp\Pattern\Iterator;

class DinerMenuIterator implements \Iterator
{
    /**
     * @var MenuItem[]
     */
    private $list;

    /**
     * @var int
     */
    private $position = 0;

    /**
     * Constructor
     * @param array $list
     */
    public function __construct(array $list)
    {
        $this->list = $list;
    }

    /**
     * Get current element
     * @return mixed
     */
    public function current()
    {
        return $this->list[$this->position];
    }

    /**
     * Move forward to next element
     */
    public function next(): void
    {
        $this->position += 1;
    }

    /**
     * Checks if current position is valid
     * @return bool
     */
    public function valid(): bool
    {
        if ($this->position >= count($this->list) || $this->list[$this->position] === null) {
			return false;
		} else {
			return true;
		}
    }

    /**
     * Rewind
     */
    public function rewind(): void
    {
        $this->position = 0;
    }

    /**
     * Key
     * @return int
     */
    public function key(): int
    {
        return $this->position;
    }
}
