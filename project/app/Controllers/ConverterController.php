<?php

namespace Controllers;

require_once "../Classes/Converter.php";

use Classes\Converter;

class ConverterController {

    function convert(): void {

        Converter::converterToBinary();
        Converter::converterToDecimal();

        $_SESSION["decimal"] = Converter::getDecimal();
        $_SESSION["binary"] = Converter::getBinary();

        header("Location: http://127.0.0.1:8001/", true, 303);
        exit();
    }

}

$ConverterController = new ConverterController();
$ConverterController->convert();