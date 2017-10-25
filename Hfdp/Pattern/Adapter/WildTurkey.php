<?php

namespace Hfdp\Pattern\Adapter;

class WildTurkey implements TurkeyInterface
{
    /**
     * Gobble
     */
    public function gobble(): void
    {
        echo "Gobble gobble<br />";
    }

    /**
     * Fly
     */
    public function fly(): void
    {
        echo "I'm flying a short distance<br />";
    }
}
