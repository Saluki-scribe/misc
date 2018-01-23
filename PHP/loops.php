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
                //WHILE LOOP
                while ($startingNum <= 100) {
                    echo "$startingNum is pretty puny!<br>";

                    $startingNum++;
                }

                //FOR LOOP

                for ($i = 20; $i <= 30; $i++) {
                    echo "Number $i <br>";
                }

                //FOREACH LOOP
                $friends = array("Miles", "Russell", "Hikari", "Jan", "Mr. Poopiebuttface");

                foreach ( $friends as $friend) {

                    //output each individual value in the array
                    echo "$friend is my friend! <br>";

                }

                //DO WHILE LOOP - Will always execute the first time
                $foo = 10;
                do {
                    echo "I will always love $foo. <br>";
                    $foo++;

                } while ( $foo <= 10);

            ?>

        </div>

    </body>
</html>
