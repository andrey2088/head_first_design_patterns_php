<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class Onion implements VeggiesInterface
{
    /**
     * Magic method
     * @return string
     */
    public function __toString(): string
    {
        return "Onion";
    }
}
