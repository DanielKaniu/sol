<?php
//
//
declare(strict_types = 1);
//
//Load the class' path using my autoloader.
include './includes/autoLoader.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Oop Calculator
        </title>
    </head>
    <body>
        <form action="includes/calc.inc.php" method="post">
            <!--
            Number 1 -->
            <input type="number" name="num1" placeholder="Enter number 1"/>
            <!--
            Operator selector -->
            <select name="operator">
                <option value="add">add</option>
                <option value="subtract">subtract</option>
                <option value="divide">divide</option>
                <option value="multiply">multiply</option>
            </select>
            <!--
            Number 2 -->
            <input type="number" name="num2" placeholder="Enter number 2"/>
            <!--
            Number 1 -->
            <input type="submit" name="submit" value="calculate"/>
        </form>
    </body>
</html>