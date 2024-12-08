<?php

namespace Models;

require_once "./app/Config/config.php";

require_once MODELS_PATH . "/ModelAbstract.php";

abstract class ConverterModelAbstract extends ModelAbstract {

    public function __construct() {}

    abstract function convertToBinary(int $value = 0): string;

    abstract public function convertToDecimal(int $value = 0): string;

}

?>