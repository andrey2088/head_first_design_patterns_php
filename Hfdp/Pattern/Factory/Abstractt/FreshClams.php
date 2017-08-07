<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class FreshClams implements ClamsInterface
{
    /**
     * Magic method
     * @return string
     */
    public function __toString()
    {
        return "Fresh Clams from Long Island Sound";
    }
}
