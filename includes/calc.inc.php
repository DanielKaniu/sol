<?php
//
//
declare(strict_types = 1);
include './autoLoader.inc.php';
//
//Get user inputs.
$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];
$operator = $_REQUEST['operator'];
//echo $num1.$operator.$num2;
//
//Instantiate the calculate class.
$calculate = new Calculate((int)$num1, (int)$num2, (string)$operator);
//
//
try {
    echo $calculate->calc();
} catch (TypeError $exc) {
    echo "Error found:" . $exc->getMessage();
}
