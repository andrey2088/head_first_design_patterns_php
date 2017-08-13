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
    public function up()
    {
        echo $this->description . " going up<br />";
    }

    /**
     * Down
     */
    public function down()
    {
        echo $this->description . " going down<br />";
    }

    /**
     * Magic method
     * @return string
     */
    public function toString()
    {
        return $this->description;
    }
}
