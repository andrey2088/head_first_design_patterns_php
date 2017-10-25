<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class SlicedPepperoni implements PepperoniInterface
{
    /**
     * Magic method
     * @return string
     */
    public function __toString(): string
    {
        return "Sliced Pepperoni";
    }
}
