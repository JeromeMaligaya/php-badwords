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
        <form id="form" class="mt-5 row justify-content-center" method="GET" action="./process.php">
            <div class="mb-4 col-8">
                <label for="userText" class="form-label">Type a text</label>
                <textarea name="userText" class="form-control" id="userText" rows="3" placeholder="..."></textarea>
            </div>
            
            <div class="mb-4 col-8">
                <label for="userWord" class="form-label">Type the word to censure</label>
                <input name="userWord" type="text" class="form-control" id="userWord" placeholder="...">
            </div>
            
            <div class="col-8">
                <button class="btn btn-primary" type="submit">Send</button>
            </div>
        </form>
        
        <!-- js bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>

<!-- esercizio finito -->


