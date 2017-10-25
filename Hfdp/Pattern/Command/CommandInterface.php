<?php

namespace Hfdp\Pattern\Command;

interface CommandInterface
{
    /**
     * Execute command
     */
    public function execute(): void;

    /**
     * Undo
     */
    public function undo(): void;
}
