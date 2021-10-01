<html>
    <head>
        <title>Fizz | Buzz</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- 
        Import the javascript file -->
        <script src="fizz.js"></script>
    </head>
    <body onload="clear_results()">
        <div>
            <!--
            The form holding the data -->
            <form action="" method="post">
                <!--
                Get the user input -->
                <input type="number" name="input" id="input"/>       
                <!--
                Post the results. -->
                <input type="submit"/>
            </form>
        </div>
        <div id="results">
            <!--
            Display the results here. -->
            <?php
//
//Check if the input value is empty or not.
            if ($input !== "") {
                //
                //Post the results here.
            }
            ?>
        </div>
    </body>
</html>
<?php
//
//Get the user input.
$input = $_REQUEST['input'];
//
//Create a condition to help in displaying the results.
if ($input >=1 && $input <= 100) {
    //
    //
    if ($input % 3 == 0 && $input % 5 == 0) {
        //
        //
        echo "fizzbuzz";
    } elseif ($input % 5 == 0) {
        //
        //
        echo "buzz";
    } elseif ($input % 3 == 0) {
        //
        //
        echo "fizz";
    } else {
        //
        //
        echo "not applicable";
    }
} else {
    //
    //Error message incase there is no user input.
    echo "Number is either less than 1 or greater than 100"."<br/>";
    echo "Please insert a number that is greater than 1 and less than 100";
}
?>

