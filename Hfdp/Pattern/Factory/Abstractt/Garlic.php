<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class Garlic implements VeggiesInterface
{
    /**
     * Magic method
     * @return string
     */
    public function __toString()
    {
        return "Garlic";
    }
}
