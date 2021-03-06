<?php 
    define( "TITLE", "Functions &amp; Arguments");
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

                function myFirstFunction () {
                    $a = 0;

                    do{
                        echo "$a &nbsp;";
                        $a++;
                    } while( $a <= 100);
                }

                //call the function

              //  myFirstFunction();

                function mySecondFunction( $x ) {
                    do {
                        echo "$x &nbsp;";
                        $x++;
                    } while( $x <= 10 );
                }

                mySecondFunction( 1 );

                function addTogether ($x, $y) {
                    $sum = $x + $y;
                    echo "$x + $y = $sum.";
                }

                addTogether(34, 899);

            ?>
        </div>

    </body>
</html>