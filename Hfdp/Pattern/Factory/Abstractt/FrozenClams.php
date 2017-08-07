<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class FrozenClams implements ClamsInterface
{
    /**
     * Magic method
     * @return string
     */
    public function __toString()
    {
        return "Frozen Clams from Chesapeake Bay";
    }
}
