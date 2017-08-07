<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class EggPlant implements VeggiesInterface
{
    /**
     * Magic method
     * @return string
     */
    public function __toString()
    {
        return "Eggplant";
    }
}
