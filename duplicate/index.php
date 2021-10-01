<?php
//
//Get the user input.
$string = $_REQUEST['string'];
//
//
?>


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
                <input type="text" name="string" id="input"/>      
                <br>
                <!--
                Post the results. -->
                <input type="submit" value="Check duplicates"/>
            </form>
        </div>
        <div id="results">
            <!--
            Display the results here. -->
            <?php
                //
                //
//                echo json_encode(str_split($string));
                $exploded = explode(" ", $string);
//                echo $exploded[0];
                var_dump(array_unique($exploded));
                //
                //
//                $myString = "9,admin@example.com,8";
//                $myArray = explode(',', $myString);
//                print_r($myArray);
//
//
//
//                // Example 1
//                $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
//                $pieces = explode(" ", $pizza);
//                echo $pieces[0]; // piece1
//                echo $pieces[1]; // piece2
            ?>
        </div>
    </body>
</html>