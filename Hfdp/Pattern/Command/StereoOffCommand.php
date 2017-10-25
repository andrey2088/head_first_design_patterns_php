<?php

namespace Hfdp\Pattern\Command;

class StereoOffCommand implements CommandInterface
{
    /**
     * @var Stereo
     */
    private $stereo;

    /**
     * Constructor
     * @param Stereo $stereo
     */
    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    /**
     * Execute command
     */
    public function execute(): void
    {
        $this->stereo->off();
    }

    /**
     * Undo
     */
    public function undo(): void {}
}
