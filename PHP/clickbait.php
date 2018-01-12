<?php 
    define("TITLE", "Recipes for Monsters");

    if( isset( $_POST["fix_submit"] )) {
        $clickBait = strtolower($_POST["clickbait_headline"]);

        $a = array(
            "milk",
            "eggs",
            "butter",
            "cheese",
            "cream",
            "chicken",
            "beef",
            "pork",
            "potatoes",
            "cinnamon",
            "nutmeg",
            "spices"
        );

        $b = array(
            "blood",
            "spider eggs",
            "mucus",
            "guts",
            "blood",
            "crow",
            "rotting flesh",
            "human flesh",
            "eyeballs",
            "ashes",
            "ashes",
            "ashes"
        );

    }
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
            <p class="lead">Hate click bait? Turn those annoying headlines into realistic and honest ones using this simple program.</p>

            <div class="row">
                <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                    <textarea placeholder="Paste click bait headline here" class="form-control input-lg" name="clickbait_headline"></textarea><br>
                    <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make Honest</button>
                </form>
            </div>

        </div>

    </body>

</html>