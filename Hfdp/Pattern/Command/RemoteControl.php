<?php

namespace Hfdp\Pattern\Command;

class RemoteControl
{
    private const SLOTS_COUNT = 7;

    /**
     * @var CommandInterface[]
     */
    private $onCommands = array();

    /**
     * @var CommandInterface[]
     */
    private $offCommands = array();

    /**
     * @var CommandInterface
     */
    private $undoCommand;

    /**
     * Constructor
     */
    public function __construct()
    {
        $noCommand = new NoCommand();
        for ($i = 0; $i < self::SLOTS_COUNT; $i++) {
            $this->onCommands[$i] = $noCommand;
            $this->offCommands[$i] = $noCommand;
        }
        $this->undoCommand = $noCommand;
    }

    /**
     * Set command
     */
    public function setCommand(int $slot, CommandInterface $onCommand, CommandInterface $offCommand): void
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    /**
     * Called when the "on" button was pressed
     */
    public function onButtonWasPressed(int $slot): void
    {
        $this->onCommands[$slot]->execute();
        $this->undoCommand = $this->onCommands[$slot];
    }

    /**
     * Called when the "off" button was pressed
     */
    public function offButtonWasPressed(int $slot): void
    {
        $this->offCommands[$slot]->execute();
        $this->undoCommand = $this->offCommands[$slot];
    }

    /**
     * Called when the "undo" button was pressed
     */
    public function undoButtonWasPressed(): void
    {
        $this->undoCommand->undo();
    }

    /**
     * Magic method
     * @return string
     */
    public function __toString(): string
    {
        $stringBuff = "<br />------ Remote Control ------";
        for ($i = 0; $i < self::SLOTS_COUNT; $i++) {
            $stringBuff .= "<br />[slot " . $i . "] " . get_class($this->onCommands[$i])
                . "&emsp;" . get_class($this->offCommands[$i]);
        }
        $stringBuff .= "<br />[undo] " . get_class($this->undoCommand) . "<br /><br />";

        return $stringBuff;
    }
}
