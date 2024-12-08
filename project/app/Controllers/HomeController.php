<?php

namespace Controllers;

require_once "./app/Config/config.php";

require_once MODELS_PATH . "/ModelAbstract.php";
require_once CONTROLLERS_PATH . "/ControllerAbstract.php";

use Models\ConverterModelAbstract;
use Controllers\ControllerAbstract;

class HomeController extends ControllerAbstract
{

    private ConverterModelAbstract $ConverterModel;

    public function __construct(ConverterModelAbstract $ConverterModel)
    {

        $this->ConverterModel = $ConverterModel;

    }

    public function index(): void
    {
        require_once VIEWS_PATH . "/Home.php";
    }

    public function convert(): void
    {

        $this->convertToBinary();
        $this->convertToDecimal();

        $this->index();

    }

    private function convertToBinary(){

        if($_GET["converter"] == "binary") {

            $decimal = !empty($_GET["decimal"]) ? $_GET["decimal"] : 0;

            $_SESSION["decimal"] = $decimal;

            $_SESSION["binary"] = $this->ConverterModel->convertToBinary($decimal);

        }

    }

    private function convertToDecimal(){

        if($_GET["converter"] == "decimal") {

            $binary = !empty($_GET["binary"]) ? $_GET["binary"] : 0;

            $_SESSION["binary"] = $binary;

            $_SESSION["decimal"] = $this->ConverterModel->convertToDecimal($binary);

        }

    }

}
