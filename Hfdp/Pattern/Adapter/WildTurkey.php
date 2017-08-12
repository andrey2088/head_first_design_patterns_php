<?php

namespace Hfdp\Pattern\Adapter;

class WildTurkey implements TurkeyInterface
{
    /**
     * Gobble
     */
    public function gobble()
    {
        echo "Gobble gobble<br />";
    }

    /**
     * Fly
     */
    public function fly()
    {
        echo "I'm flying a short distance<br />";
    }
}
