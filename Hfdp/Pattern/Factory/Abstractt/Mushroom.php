<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class Mushroom implements VeggiesInterface
{
    /**
     * Magic method
     * @return string
     */
    public function __toString()
    {
        return "Mushrooms";
    }
}
