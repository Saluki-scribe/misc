<?php 
    define("TITLE", "PHP Arrays");
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
            <h1><?php echo(TITLE); ?></h1>

            <?php 

            //SIMPLE ARRAY
                $russell = array("russinator347", "Russell LaFlamme", 21, "male", "Yorsa");

                echo ($russell[1] . " is from " . $russell[4] . ".");
            
            //ASSOCIATIVE ARRAYS
                $vampires = array(

                    "username" => "russinator347",
                    "fullname" => "Russell LaFlamme",
                    "age" => 21,
                    "gender" => "male",
                    "country" => "Yorsa"
                );

            echo( "<br>" . $vampires[username] . " is the username of " . $vampires[fullname] . " who comes from " . $vampires[country] . "." );
            
        //MULTIDIMENSIONAL ARRAYS
                $yorsans = array(
                    array(
                        "name" => "Graham Francel",
                        "age" => 71,
                        "gender" => "male"
                    ),
                    array(
                        "name" => "Russell LaFlamme",
                        "age" => 21,
                        "gender" => "male"
                    ),
                    array(
                        "name" => "Chiyo Strait",
                        "age" => 21,
                        "gender" => "female"
                    )
                );

                echo("<br><br>My favorite characters are " . $yorsans[0]["name"] . ", " . $yorsans[1]["name"] . ", and " . $yorsans[2]["name"] . "!");


            
            ?>
        </div>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>