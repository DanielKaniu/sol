<?php
    include 'includes/autoLoader.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php
        $person1 = new Person();
        try {
            echo $person1->xtics("Big");
        } catch (TypeError $exc) {
            echo $exc->getMessage();
        }

//echo $person1->name;
//
//
//        $pet1 = new Pet();
//        echo $pet1->owner("Kaniu");
////echo $obj->name."<br>";

        ?>
    </body>
</html>
