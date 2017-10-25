<?php

namespace Hfdp\Pattern\Adapter;

class TurkeyAdapter implements DuckInterface
{
    /**
     * @var TurkeyInterface
     */
    private $turkey;

    /**
     * Constructor
     * @param TurkeyInterface $turkey
     */
    public function __construct(TurkeyInterface $turkey)
    {
        $this->turkey = $turkey;
    }

    /**
     * Quack
     */
    public function quack(): void
    {
        $this->turkey->gobble();
    }

    /**
     * Fly
     */
    public function fly(): void
    {
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }
}
