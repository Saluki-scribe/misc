<?php 
    define("TITLE", "Recipes for Monsters");

    if( isset( $_POST["fix_submit"] )) {
        $recipe = strtolower($_POST["normal_recipe"]);

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

        $monsterRecipe = str_replace( $a, $b, $recipe);
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
            <p class="lead">Are you expecting undead, monstrous, or otherwise supernaturally terrifying guests? Just add a run of the mill recipe, and we'll convert it into a meal any monster would love!</p>

            <div class="row">
                <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                    <textarea placeholder="Paste recipe ingredients here" class="form-control input-lg" name="normal_recipe"></textarea><br>
                    <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make Monstrous!</button>
                </form>
            </div>

            <?php 
                if (isset($_POST["fix_submit"])) {
                    echo ("<strong class='text-danger'>Normal Recipe</strong>
                    <h4>".$recipe. "</h4><hr>");

                    echo ("<strong class='text-success'>Monster Recipe</strong>
                    <h4>".$monsterRecipe. "</h4>");
                }
            ?>

        </div> <!--End Container-->

    </body>

</html>