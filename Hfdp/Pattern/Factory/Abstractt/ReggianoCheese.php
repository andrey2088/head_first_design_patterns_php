<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class ReggianoCheese implements CheeseInterface
{
    /**
     * Magic method
     * @return string
     */
    public function __toString(): string
    {
        return "Reggiano Cheese";
    }
}
