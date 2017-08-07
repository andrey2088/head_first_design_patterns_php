<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class ThickCrustDough implements DoughInterface
{
    /**
     * Magic method
     * @return string
     */
    public function __toString()
    {
        return "ThickCrust style extra thick crust dough";
    }
}
