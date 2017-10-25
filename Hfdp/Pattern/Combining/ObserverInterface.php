<?php

namespace Hfdp\Pattern\Combining;

interface ObserverInterface
{
    /**
     * Update
     * @param QuackObservableInterface $duck
     */
    public function update(QuackObservableInterface $duck): void;
}
