<?php

ini_set("include_path", dirname(__FILE__));

require_once("autoloader.php");
spl_autoload_register('Autoloader::loader');

\Hfdp\Controller\MainController::main();