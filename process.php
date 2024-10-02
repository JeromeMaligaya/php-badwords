<?php 
$user_word = $_GET["userWord"];
$user_text = $_GET["userText"];
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Melvin Jerome Luna Maligaya">
        <title>php-badwords</title>
          
            <!-- Bootstrap -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

            <!--Css-->
            <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    
    <body>
        <div class="m-4">
            <h3 class="mb-3">Length of your text: <span> <?php echo strlen($user_text); ?> </span></h3>

            <h3 class="mb-3">Word to censure: <span> <?php echo $user_word; ?> </span></h3>
            
            <div class="mb-3">
                <h3>This is your censored text:</h3>
                <p class="mx-5"><?php echo str_ireplace($user_word, "***", $user_text); ?></p>
            </div>
        </div>
       

        <!-- js bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
