<?php

declare(strict_types=1);

namespace App;

require_once ("src/Utils/debug.php");
require_once ("src/Controller.php");

$controller = new Controller($_GET, $_POST);
$controller->run();





