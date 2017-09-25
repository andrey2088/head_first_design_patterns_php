<?php

namespace Hfdp\Pattern\Strategy;

abstract class AbstractDuck
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
    abstract public function display();

    /**
     * Set fly behavior
     * @param FlyBehaviorInterface $fb
     */
    public function setFlyBehavior(FlyBehaviorInterface $fb)
    {
        $this->flyBehavior = $fb;
    }

    /**
     * Set quack behavior
     * @param QuackBehaviorInterface $qb
     */
    public function setQuackBehavior(QuackBehaviorInterface $qb)
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
        echo "All ducks float, even decoys!<br />";
    }
}
