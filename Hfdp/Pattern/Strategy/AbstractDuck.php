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
    abstract public function display(): void;

    /**
     * Set fly behavior
     * @param FlyBehaviorInterface $fb
     */
    public function setFlyBehavior(FlyBehaviorInterface $fb): void
    {
        $this->flyBehavior = $fb;
    }

    /**
     * Set quack behavior
     * @param QuackBehaviorInterface $qb
     */
    public function setQuackBehavior(QuackBehaviorInterface $qb): void
    {
        $this->quackBehavior = $qb;
    }

    /**
     * Fly
     */
    public function performFly(): void
    {
        $this->flyBehavior->fly();
    }

    /**
     * Quack
     */
    public function performQuack(): void
    {
        $this->quackBehavior->quack();
    }

    /**
     * Swim
     */
    public function swim(): void
    {
        echo "All ducks float, even decoys!<br />";
    }
}
