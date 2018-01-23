<?php 
    define( "TITLE", "If, Else &amp; Elseif Statements" );
?>

<!DOCTYPE html>
<html>
    
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title><?php echo TITLE; ?></title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <h1><?php echo TITLE; ?></h1>

            <?php 
                
            //IF expression is TRUE, do something
            //IF expression is FALSE, don't do anything

                $foo = 99;
                $bar = 99;
                if ( $foo > $bar) {
                    echo "$foo is greater than $bar! :D"; 
                    //If you have variables in double quotes, their values will display on the screen
                    //If you use single quotes, you'll get the actual variable names on the screen
                } else if ( $foo < $bar) {
                    echo "$foo is NOT greater than $bar. :(";
                } else {
                    echo "$foo is THE SAME as $bar!! :O";
                }
            ?>

        </div>
    </body>

</html>