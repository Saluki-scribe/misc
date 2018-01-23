<?php 
    define( "TITLE", "Loops");
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
                $startingNum = 50;

                while ($startingNum <= 100) {
                    echo "$startingNum is pretty puny!<br>";

                    $startingNum++;
                }
            ?>

        </div>

    </body>
</html>