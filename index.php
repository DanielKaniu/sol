<?php
//
//
spl_autoload_register('myAutoLoader');

//
// 
function myAutoLoader($className) {
    //
    //
    $path = "classes/";
    $extension = ".class.php";
    $full_path = $path . $className . $extension;

    include_once $full_path;
}
//
//
$fname = $_REQUEST['fname'];
$sname = $_REQUEST['sname'];
$deductions = $_REQUEST['deductions'];
$gross_salary = $_REQUEST['gross_salary'];
?>

<html>
    <head>

    </head>
    <body>
        <form action="" method="get">
            <input type="text" name="fname" placeholder="Enter first name"/>
            <br>
            <input type="text" name="sname" placeholder="Enter second name"/>
            <br>
            <input type="number" name="gross_salary" placeholder="Enter gross salary"/>
            <br>
            <input type="number" name="deductions" placeholder="Enter deductions"/>
            <br>
            <input type="submit"/>
        </form>
        <?php
//
//
        $obj = new User($fname, $sname, $deductions, $gross_salary);
        //
        if (!isset($obj)) {
            //
            //
            echo 'hi';
        } else {
            //
            //
            echo $obj->get_job();
        }
        ?>
    </body>
</html>