<?php

namespace Hfdp\Pattern\Strategy;

class Duck
{
    /**
     * Fly interface
     * @var FlyBehaviorInterface;
     */
    protected $flyBehavior;
    
    /**
     * Quack interface
     * @var QuackBehaviorInterface;
     */
    protected $quackBehavior;
    
    /**
     * Constructor
     */
    public function __construct() {}
    
    /**
     * Display
     */
    public function display() {}
    
    /**
     * Set fly behavior
     * @param FlyBehaviorInterface $fb
     */
    protected function setFlyBehavior(FlyBehaviorInterface $fb)
    {
        $this->flyBehavior = $fb;
    }
    
    /**
     * Set quack behavior
     * @param QuackBehaviorInterface $qb
     */
    protected function setQuackBehavior(QuackBehaviorInterface $qb)
    {
        $this->quackBehavior = $qb;
    }
    
    /**
     * Fly
     */
    public function performFly()
    {
        $this->flyBehavior->fly();
    }
    
    /**
     * Quack
     */
    public function performQuack()
    {
        $this->quackBehavior->quack();
    }
    
    /**
     * Swim
     */
    public function swim()
    {
        $message = "All ducks float, even decoys!";
        \Hfdp\Utils::output($message);
    }
}
