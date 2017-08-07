<?php

namespace Hfdp\Pattern\Factory\Simple;

class PizzaStore
{
    /**
     * @var SimplePizzaFactory
     */
    private $factory;
    
    /**
     * Constructor
     * @param SimplePizzaFactory $factory
     */
    public function __construct(SimplePizzaFactory $factory)
    {
        $this->factory = $factory;
    }
    
    /**
     * Order Pizza
     * @param string $type
     * @return Pizza
     */
    public function orderPizza($type)
    {
        $pizza = $this->factory->createPizza($type);
        
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        
        return $pizza;
    }
}
