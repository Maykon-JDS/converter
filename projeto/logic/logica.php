<?php

namespace Logic;

class ConversorBinarioDecimal{

    static public $decimal = 0;
    static public $binario = 0;

    static public function converterParaBinario(){

        if(empty($_GET["converter"])){

            return 0;

        }

        if($_GET["converter"] == "decimal"){
            $decimalGet = $_GET["decimal"] ?? 0;

            ConversorBinarioDecimal::$decimal = $decimalGet;

            ConversorBinarioDecimal::$binario = decbin(intval($_GET["decimal"]));
        }


    }

    static public function converterParaDecimal(){

        if(empty($_GET["converter"])){

            return 0;

        }

        if($_GET["converter"] == "binario"){
            $binarioGet = $_GET["binario"] ?? 0;

            ConversorBinarioDecimal::$binario = $binarioGet;

            ConversorBinarioDecimal::$decimal = bindec(intval(ConversorBinarioDecimal::$binario));
        }

    }

    static public function getBinario(){
        return ConversorBinarioDecimal::$binario;
    }

    static public function getDecimal(){
        return ConversorBinarioDecimal::$decimal;
    }

}


?>