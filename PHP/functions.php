<?php 

    function checkForRecipe() {
        $recipe = strtolower($_POST["normal_recipe"]);

        $a = array(
            "milk",
            "eggs",
            "egg",
            "butter",
            "cheese",
            "cream",
            "chicken",
            "beef",
            "pork",
            "potatoes",
            "cinnamon",
            "nutmeg",
            "spices",
            "flour",
            "sugar",
            "salt",
            "pepper",
            "onions",
            "vanilla"
        );

        $b = array(
            "blood",
            "spider eggs",
            "spider egg",
            "mucus",
            "guts",
            "blood",
            "crow",
            "rotting flesh",
            "human flesh",
            "eyeballs",
            "essence of soul",
            "goblin dust",
            "ashes",
            "ashes",
            "ghost plasma",
            "powdered bone",
            "graveyard dirt",
            "dead man's nails",
            "putrid blood"
        );

        $monsterRecipe = str_replace( $a, $b, $recipe);

        return array($recipe, $monsterRecipe);
    }

    function displayMonsterRecipe($x, $y) {
        echo ("<strong class='text-danger'>Normal Recipe</strong>
                <h4>".$x. "</h4><hr>");

                echo ("<strong class='text-success'>Monster Recipe</strong>
                <h4>".$y. "</h4>");
    }
?>