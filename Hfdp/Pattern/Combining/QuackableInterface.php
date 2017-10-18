<?php

namespace Hfdp\Pattern\Combining;

interface QuackableInterface extends QuackObservableInterface
{
    /**
     * Quack
     */
    public function quack();
}
