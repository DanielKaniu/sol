<?php
//
//Get the user inputs.
$salary = $_REQUEST['salary'];
$years = $_REQUEST['years'];
$legible = $_REQUEST['existing_loan'];
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
                <input type="number" name="salary" id="input" placeholder="Enter current salary"/>
                <br>
                <!--
                Get the user input -->
                <input type="number" name="years" id="input" placeholder="Enter working years"/>
                <br>
                <!--
                Check loan eligibility -->
                <div>
                    Do you have an existing loan with Mkulima Co-operative?
                <div/>
                <!--
                Confirm if user has existing loan or not -->
                <input type="radio" id="yes" name="existing_loan" value="yes">
                <label for="yes">Yes<label/>
                <input type="radio" id="no" name="existing_loan" value="no">
                <label for="no">No<label/>
                <br>
                <!--
                Post the results. -->
                <input type="submit" value="Check loan elligibility"/>
            </form>
            <div id="results">
                <!--
                Display the results here. -->
                <?php
                    //
                    //
                   if($salary > 30000 && $years >= 2 && $legible === "no"){
                       //
                       //
                       echo "Eligible";
                   }
                   else{
                       //
                       //
                       echo "<br>"."<br>";
                       echo "Not Eligible";
                   }
                ?>
            </div>

        </div>
    </body>
</html>