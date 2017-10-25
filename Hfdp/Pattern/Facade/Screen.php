<?php

namespace Hfdp\Pattern\Facade;

class Screen
{
    /**
     * @var string
     */
    private $description;

    /**
     * Constructor
     * @param string $description
     */
    public function __construct(string $description)
    {
        $this->description = $description;
    }

    /**
     * Up
     */
    public function up(): void
    {
        echo $this->description . " going up<br />";
    }

    /**
     * Down
     */
    public function down(): void
    {
        echo $this->description . " going down<br />";
    }

    /**
     * Magic method
     * @return string
     */
    public function toString(): string
    {
        return $this->description;
    }
}
