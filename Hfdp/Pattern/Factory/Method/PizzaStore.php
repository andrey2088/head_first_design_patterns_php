<?php

namespace Hfdp\Pattern\Factory\Method;

abstract class PizzaStore
{
    /**
     * Order Pizza
     * @param string $type
     * @return Pizza
     */
    public function orderPizza($type)
    {
        $pizza = $this->createPizza($type);
        
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        
        return $pizza;
    }
    
    /**
     * Create pizza
     * @param string $type
     * @return Pizza
     */
    abstract protected function createPizza($type);
}
