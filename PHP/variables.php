<?php 
    define( "COOLNESS", "Over 9000" );
?>

<!DOCTYPE html>

<html>
    <head>
        <title>PHP Variables & Constants</title>
    </head>
    
    <body>

        <?php 
            $isVamp = true;
            $age = 21;
            $vampName = "Russell";

            echo ("Hello, my name is " . $vampName . " and I am " . $age . " years old, and my coolness is " . COOLNESS . ".<br>");

            //Constants

            define( "TITLE", "Non-ranked");

            echo TITLE;

        ?>

    </body>
</html>