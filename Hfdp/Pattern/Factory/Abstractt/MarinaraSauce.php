<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class MarinaraSauce implements SauceInterface
{
    /**
     * Magic method
     * @return string
     */
    public function __toString()
    {
        return "Marinara Sauce";
    }
}
