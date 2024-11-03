<?php

namespace Controllers;

require_once "../logic/logic.php";

use Logic\Converter;

class converterController {

    function convert(): void {

        session_start();

        Converter::converterToBinary();
        Converter::converterToDecimal();

        $_SESSION["decimal"] = Converter::getDecimal();
        $_SESSION["binary"] = Converter::getBinary();

        header("Location: http://127.0.0.1:8001/", true, 303);
        exit();
    }

}

$converterController = new converterController();
$converterController->convert();