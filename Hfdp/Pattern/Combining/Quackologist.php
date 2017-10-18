<?php

namespace Hfdp\Pattern\Combining;

class Quackologist implements ObserverInterface
{
    /**
     * Update
     * @param QuackObservableInterface $duck
     */
    public function update(QuackObservableInterface $duck)
    {
        echo "Quackologist: " . $duck . " just quacked.<br />";
    }
}
