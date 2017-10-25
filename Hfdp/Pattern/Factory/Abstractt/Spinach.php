<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class Spinach implements VeggiesInterface
{
    /**
     * Magic method
     * @return string
     */
    public function __toString(): string
    {
        return "Spinach";
    }
}
