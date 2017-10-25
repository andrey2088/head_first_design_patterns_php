<?php

namespace Hfdp\Pattern\Factory\Abstractt;

class PlumTomatoSauce implements SauceInterface
{
    /**
     * Magic method
     * @return string
     */
    public function __toString(): string
    {
        return "Tomato sauce with plum tomatoes";
    }
}
