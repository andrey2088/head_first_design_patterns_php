<?php

namespace Hfdp\Pattern\Command;

class TvOffCommand implements CommandInterface
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
        $this->tv->off();
    }

    /**
     * Undo
     */
    public function undo(): void
    {
        $this->tv->on();
    }
}
