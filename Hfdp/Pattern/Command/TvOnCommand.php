<?php

namespace Hfdp\Pattern\Command;

class TvOnCommand implements CommandInterface
{
    /**
     * @var Tv
     */
    private $tv;

    /**
     * Constructor
     * @param Tv $tv
     */
    public function __construct(Tv $tv)
    {
        $this->tv = $tv;
    }

    /**
     * Execute command
     */
    public function execute(): void
    {
        $this->tv->on();
        $this->tv->setInputChannel();
    }

    /**
     * Undo
     */
    public function undo(): void
    {
        $this->tv->off();
    }
}
