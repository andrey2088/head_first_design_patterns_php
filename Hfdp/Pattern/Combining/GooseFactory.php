<?php

namespace Hfdp\Pattern\Combining;

class GooseFactory
{
    /**
     * Create goose
     * @return QuackableInterface
     */
    public function createGoose(): QuackableInterface
    {
        return new GooseAdapter(new Goose);
    }
}
