<?php

namespace Controllers;

require_once "./app/Models/ConverterModel.php";
require_once "./app/Models/ModelAbstract.php";
require_once "./app/Controllers/ControllerAbstract.php";

use Models\ConverterModelAbstract;
use Models\ConverterModel;
use Controllers\ControllerAbstract;

class HomeController extends ControllerAbstract
{

    private ConverterModelAbstract $ConverterModel;

    public function __construct()
    {

        // TODO: Acoplamento muito forte pois a classe ConverterModel esta sendo instanciada dentro da classe HomeController
        // Quebra o principio de
        $this->ConverterModel = new ConverterModel();

    }

    public function index(): void
    {
        require_once "./app/Views/Home.php";
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
