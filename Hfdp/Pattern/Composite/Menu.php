<?php

namespace Hfdp\Pattern\Composite;

class Menu extends AbstractMenuComponent
{
    /**
     * @var \ArrayObject
     */
    private $menuComponents;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * Constructor
     * @param string $name
     * @param string $description
     */
    public function __construct(string $name, string $description)
    {
        $this->menuComponents = new \ArrayObject();
        $this->name = $name;
        $this->description = $description;
    }

    /**
     * Add
     * @param AbstractMenuComponent $menuComponent
     */
    public function add(AbstractMenuComponent $menuComponent)
    {
        $this->menuComponents->append($menuComponent);
    }

    /**
     * Remove
     * @param int $i
     */
    public function remove(int $i)
    {
        $this->menuComponents->offsetUnset($i);
    }

    /**
     * Get child
     * @param int $i
     */
    public function getChild(int $i)
    {
        return $this->menuComponents->offsetGet($i);
    }

    /**
     * Get name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Create Iterator
     * @return Iterator
     */
    public function createIterator()
    {
        return new CompositeIterator($this->getMenuComponentsIterator());
	}

    /**
     * Print
     */
	public function printt()
    {
		echo "<br />" . $this->getName();
		echo ", " . $this->getDescription() . "<br />";
		echo "---------------------" . "<br />";

        $iterator = $this->getMenuComponentsIterator();
		while ($iterator->valid()) {
			$menuComponent = $iterator->current();
            $iterator->next();
			$menuComponent->printt();
		}
	}

    public function getMenuComponentsIterator()
    {
        return $this->menuComponents->getIterator();
    }
}
