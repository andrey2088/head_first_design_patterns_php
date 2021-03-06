<?php

namespace Hfdp\Pattern\TemplateMethod;

class Tea extends AbstractCaffeineBeverage
{
    /**
     * Brew
     */
    public function brew(): void
    {
        echo "Stepping the tea<br />";
    }

    /**
     * Add condiments
     */
    public function addCondiments(): void
    {
        echo "Adding lemon<br />";
    }

    /**
     * Customer wants condiments
     * @return bool
     */
    public function customerWantsCondiments(): bool
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
	private function getUserInput(): string
    {
		// get the user's response
		$answer = null;

		echo "Would you like lemon with your tea (y/n)?<br/>";

        $answer = "Yes, you like lemon with your tea ;)";

        echo $answer . "<br />";

		return $answer;
	}
}
