<?php

namespace Hfdp\Controller;

use Hfdp\Pattern\TemplateMethod as TemplateMethod;

class TemplateMethodController
{
    /**
     * Main
     */
    public static function main(): void
    {
        $tea = new TemplateMethod\Tea();
		$coffee = new TemplateMethod\Coffee();

		echo "Making tea...<br />";
		$tea->prepareRecipe();

		echo "<br />Making coffee...<br />";
		$coffee->prepareRecipe();
    }
}
