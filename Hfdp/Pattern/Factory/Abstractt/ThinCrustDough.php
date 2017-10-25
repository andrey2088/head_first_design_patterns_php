<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class ThinCrustDough implements DoughInterface
{
    /**
     * Magic method
     * @return string
     */
    public function __toString(): string
    {
        return "Thin Crust Dough";
    }
}
