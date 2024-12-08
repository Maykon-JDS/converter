<?php

namespace Models;

require_once "./app/Config/config.php";

require_once MODELS_PATH . "/ConverterModelAbstract.php";

class ConverterModel extends ConverterModelAbstract {

    public function __construct() {}

    public function convertToBinary(int $value = 0): string {

        $binary = decbin(intval($value));

        return (string) $binary;

    }

    public function convertToDecimal(int $value = 0): string {

        $decimal = bindec(intval($value));

        return (string) $decimal;

    }

}

?>