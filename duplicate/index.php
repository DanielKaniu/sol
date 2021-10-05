<?php
//
//Get the user input.
$string = $_REQUEST['string'];
//
//
?>


<html>
    <head>
        <title>Duplicate</title>
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
                //Split the user input into word strings.
                $exploded = explode(" ", $string);
                //
                //Get the duplicate values of a user's input; case sensitive.
                echo json_encode(array_intersect($exploded, array_unique(array_diff_key($exploded, array_unique($exploded)))));
            ?>
        </div>
    </body>
</html>