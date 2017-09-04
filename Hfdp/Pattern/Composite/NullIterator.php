<?php

namespace Hfdp\Pattern\Composite;

class NullIterator implements \Iterator
{
    /**
     * Current
     * @return null
     */
    public function current()
    {
        return null;
    }

    public function next() {}

    /**
     * Valid
     * @return bool
     */
    public function valid()
    {
        return false;
    }

    public function rewind() {}

    public function key()
    {
        return null;
    }
}
