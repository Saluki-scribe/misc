<?php 
    define("TITLE", "Recipes for Monsters");
    include("functions.php");

    if( isset( $_POST["fix_submit"] )) {
        checkForRecipe();
    }
?>

<!DOCTYPE html>
<html>
    
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title><?php echo TITLE; ?></title>
        <link rel="stylesheet" type="text/css" href="assets/style.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container" id="background">
            <h1><?php echo(TITLE); ?></h1>
            <p class="lead">Are you expecting undead, monstrous, or otherwise supernaturally terrifying guests? Just add a run of the mill recipe, and we'll convert it into a meal any monster would love!</p>

            <div class="row">
                <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                    <textarea placeholder="Paste recipe ingredients here" class="form-control input-lg" name="normal_recipe"></textarea><br>
                    <button type="submit" class="btn btn-danger btn-lg pull-right" name="fix_submit">Make Monstrous!</button>
                </form>
            </div>

            <?php 
                if (isset($_POST["fix_submit"])) {

                    $recipe = checkForRecipe()[0];
                    $monsterRecipe = checkForRecipe()[1];

                    displayMonsterRecipe( $recipe, $monsterRecipe);
                }
            ?>

        </div> <!--End Container-->

    </body>

</html>