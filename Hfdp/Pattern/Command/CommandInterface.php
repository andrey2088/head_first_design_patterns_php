<?php

namespace Hfdp\Pattern\Command;

interface CommandInterface
{
    /**
     * Execute command
     */
    public function execute();

    /**
     * Undo
     */
    public function undo();
}
