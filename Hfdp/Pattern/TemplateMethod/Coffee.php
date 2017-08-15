<?php

namespace Hfdp\Pattern\TemplateMethod;

class Coffee extends AbstractCaffeineBeverage
{
    /**
     * Brew
     */
    public function brew()
    {
        echo "Dripping Coffee through filter<br />";
    }

    /**
     * Add condiments
     */
    public function addCondiments()
    {
        echo "Adding Sugar and Milk<br />";
    }

    /**
     * Customer wants condiments
     * @return bool
     */
    public function customerWantsCondiments()
    {
		$answer = $this->getUserInput();

		if (strcasecmp(mb_substr($answer, 0, 1, "utf-8"), "y") === 0) {
			return true;
		} else {
			return false;
		}
	}

    /**
     * Get user input
     * @return string
     */
	private function getUserInput()
    {
		// get the user's response
		$answer = null;

		echo "Would you like milk and sugar with your coffee (y/n)?<br/>";

        $answer = "No, you don't like milk and sugar with your coffee ;)";

        echo $answer . "<br />";

		return $answer;
	}
}
