<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class RedPepper implements VeggiesInterface
{
    /**
     * Magic method
     * @return string
     */
    public function __toString()
    {
        return "Red Pepper";
    }
}
