<?php 
    define( "TITLE", "Get &amp; Post");

    if( isset( $_POST["form_submit"] ) ) {

        // build a function that validates data
        function validateFormData( $formData ) {
            $formData = trim( stripslashes( htmlspecialchars( $formData) ) );
            return $formData;
        }

        //check to see if inputs are empty
        //create variables with form data
        //wrap the data with our function

        if( !$_POST["name"]) {
            $nameError = "Please enter your name <br>";
        } else {
            $name = validateFormData($_POST["name"] );
        }

        if( !$_POST["email"]) {
            $emailError = "Please enter your email <br>";
        } else {
            $email = validateFormData($_POST["email"] );
        }

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
            
            <h1><?php echo TITLE; ?></h1>
            
            <h4>Submitted via $_GET</h4>
            <form action="form_get.php" method="get">
                <input type="text" placeholder="Name" name="name">
                <input type="text" placeholder="Email" name="email">
                <input type="submit" name="form_submit">
            </form>

                <hr>
            
            <h4>Submitted via $_POST</h4>
            <form action="form_post.php" method="post">
                <input type="text" placeholder="Name" name="post_name">
                <input type="text" placeholder="Email" name="post_email">
                <input type="submit" name="post_submit">
            </form>

                <hr>
            
            <h4>Submitted to current page</h4>
            <p class="text-danger">* Required fields</p>

            <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
                <small class="text-danger">* <?php echo $nameError;?></small>
                <input type="text" placeholder="Name" name="post_name">

                <small class="text-danger">* <?php echo $nameError;?></small>
                <input type="text" placeholder="Email" name="post_email">
                <input type="submit" name="post_submit">
            </form>


        </div>
    </body>

</html>