<?php

namespace Hfdp\Pattern\Factory\Abstractt;

abstract class AbstractPizza
{
    /**
     * @var string
     */
    public $name;
    
    /**
     * @var DoughInterface
     */
    public $dough;
    
    /**
     * @var SauceInterface
     */
    public $sauce;
    
    /**
     * @var array<VeggiesInterface>
     */
    public $veggies;
    
    /**
     * @var CheeseInterface
     */
    public $cheese;
    
    /**
     * @var PepperoniInterface
     */
    public $pepperoni;
    
    /**
     * @var ClamsInterface
     */
    public $clam;
    
    /**
     * Prepare
     */
    abstract public function prepare();
    
    /**
     * Bake
     */
    public function bake()
    {
        echo "Bake for 25 minutes at 350<br />";
    }
    
    /**
     * Cut
     */
    public function cut()
    {
        echo "Cutting the pizza into diagonal slices<br />";
    }
    
    /**
     * Box
     */
    public function box()
    {
        echo "Place pizza in official PizzaStore box<br />";
    }
    
    /**
     * Set name
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Returns name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Magic method
     * @return string
     */
    public function __toString()
    {
        $result = "---- " . $this->name . " ----<br />";
        if ($this->dough != null) {
                $result .= "&emsp;&emsp;" . $this->dough . "<br />";
        }
        if ($this->sauce != null) {
                $result .= "&emsp;&emsp;" . $this->sauce . "<br />";
        }
        if ($this->cheese != null) {
                $result .= "&emsp;&emsp;" . $this->cheese . "<br />";
        }
        if ($this->veggies != null) {
            $result .= "&emsp;&emsp;";
            foreach ($this->veggies as $i => $veggie) {
                $result .= $veggie;
                if ($i < count($this->veggies) - 1) {
                    $result .= ", ";
                }
            }
            $result .= "<br />";
        }
        if ($this->clam != null) {
                $result .= "&emsp;&emsp;" . $this->clam . "<br />";
        }
        if ($this->pepperoni != null) {
                $result .= "&emsp;&emsp;" . $this->pepperoni . "<br />";
        }
        
        return $result;
    }
}
