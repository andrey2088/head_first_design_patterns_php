<?php

namespace Hfdp\Pattern\Composite;

class CompositeIterator implements \Iterator
{
    /**
     * @var \SplStack
     */
    private $stack;

    /**
     * Constructor
     * @param \Iterator $iterator
     */
    public function __construct(\Iterator $iterator)
    {
        $this->stack = new \SplStack();
        $this->stack->push($iterator);
    }

    /**
     * Current
     * @return Menu
     */
    public function current()
    {
        if ($this->valid()) {
            $iterator = $this->stack->top();
            $component = $iterator->current();
            $iterator->next();
            if ($component instanceof Menu) {
                $this->stack->push($component->getMenuComponentsIterator());
            }
            return $component;
        } else {
            return null;
        }
    }

    /**
     * Next
     */
    public function next() {}

    /**
     * Valid
     * @return bool
     */
    public function valid()
    {
        if ($this->stack->isEmpty()) {
			return false;
		} else {
			$iterator = $this->stack->top();
			if (!$iterator->valid()) {
                $this->stack->pop();
				return $this->valid();
			} else {
				return true;
			}
		}
    }

    public function rewind() {}

    public function key() {}
}
