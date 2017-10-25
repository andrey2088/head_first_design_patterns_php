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
    public function add(AbstractMenuComponent $menuComponent): void
    {
        $this->menuComponents->append($menuComponent);
    }

    /**
     * Remove
     * @param int $i
     */
    public function remove(int $i): void
    {
        $this->menuComponents->offsetUnset($i);
    }

    /**
     * Get child
     * @param int $i
     * @return mixed
     */
    public function getChild(int $i)
    {
        return $this->menuComponents->offsetGet($i);
    }

    /**
     * Get name
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get description
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Create Iterator
     * @return \Iterator
     */
    public function createIterator(): \Iterator
    {
        return new CompositeIterator($this->getMenuComponentsIterator());
	}

    /**
     * Print
     */
	public function printt(): void
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

    /**
     * Get menu components iterator
     * @return \Iterator
     */
    public function getMenuComponentsIterator(): \Iterator
    {
        return $this->menuComponents->getIterator();
    }
}
