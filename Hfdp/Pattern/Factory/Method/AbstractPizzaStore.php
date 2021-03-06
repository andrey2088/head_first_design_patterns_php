<?php

namespace Hfdp\Pattern\Factory\Method;

abstract class AbstractPizzaStore
{
    /**
     * Order pizza
     * @param string $type
     * @return AbstractPizza
     */
    public function orderPizza($type): AbstractPizza
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
     * @return AbstractPizza
     */
    abstract protected function createPizza($type): AbstractPizza;
}
