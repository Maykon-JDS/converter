<?php

namespace Classes;

class Converter{

    static public $decimal = 0;
    static public $binary = 0;

    static public function converterToBinary(){

        if(empty($_GET["converter"])){

            return 0;

        }

        if($_GET["converter"] == "decimal"){
            $decimalGet = $_GET["decimal"] ?? 0;

            Converter::$decimal = $decimalGet;

            Converter::$binary = decbin(intval($_GET["decimal"]));
        }


    }

    static public function converterToDecimal(){

        if(empty($_GET["converter"])){

            return 0;

        }

        if($_GET["converter"] == "binary"){
            $binaryGet = $_GET["binary"] ?? 0;

            Converter::$binary = $binaryGet;

            Converter::$decimal = bindec(intval(Converter::$binary));
        }

    }

    static public function getBinary(){
        return Converter::$binary;
    }

    static public function getDecimal(){
        return Converter::$decimal;
    }

}


?>