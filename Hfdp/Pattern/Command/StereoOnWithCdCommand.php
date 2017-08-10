<?php

namespace Hfdp\Pattern\Command;

class StereoOnWithCdCommand implements CommandInterface
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
    public function execute()
    {
        $this->stereo->on();
        $this->stereo->setCD();
        $this->stereo->setVolume(11);
    }

    /**
     * Undo
     */
    public function undo() {}
}
