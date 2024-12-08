<?php

require_once "./app/Config/config.php";

require_once CONTROLLERS_PATH . "/HomeController.php";
require_once MODELS_PATH . "/ConverterModel.php";

use Controllers\HomeController;
use Models\ConverterModel;

$HomeController = new HomeController(new ConverterModel());

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