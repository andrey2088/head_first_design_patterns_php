<?php

namespace Hfdp\Pattern\Command;

class CeilingFanHighCommand implements CommandInterface
{
    /**
     * @var CeilingFan
     */
    private $ceilingFan;

    /**
     * @var int
     */
    private $prevSpeed;

    /**
     * Constructor
     * @param CeilingFan $ceilingFan
     */
    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    /**
     * Execute command
     */
    public function execute()
    {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->high();
    }

    /**
     * Undo
     */
    public function undo()
    {
        if ($this->prevSpeed == CeilingFan::LEVEL_HIGH) {
            $this->ceilingFan->high();
        } else if ($this->prevSpeed == CeilingFan::LEVEL_MEDIUM) {
            $this->ceilingFan->medium();
        } else if ($this->prevSpeed == CeilingFan::LEVEL_LOW) {
            $this->ceilingFan->low();
        } else if ($this->prevSpeed == CeilingFan::LEVEL_OFF) {
            $this->ceilingFan->off();
        }
    }
}
