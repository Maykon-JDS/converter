<?php

require_once "./app/Controllers/HomeController.php";

use Controllers\HomeController;

$HomeController = new HomeController();

switch (@$_GET["converter"]) {
    case "binary":
    case "decimal":
        $HomeController->convert();
        break;
    default:
        $HomeController->index();
        break;

}

?>