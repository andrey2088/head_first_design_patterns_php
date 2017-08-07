<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class MozarellaCheese implements CheeseInterface
{
    /**
     * Magic method
     * @return string
     */
    public function __toString()
    {
        return "Shredded Mozzarella";
    }
}
