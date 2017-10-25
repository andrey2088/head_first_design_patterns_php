<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class ParmesanCheese implements CheeseInterface
{
    /**
     * Magic method
     * @return string
     */
    public function __toString(): string
    {
        return "Shredded Parmesan";
    }
}
