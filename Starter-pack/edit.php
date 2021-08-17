<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>


<form action="" method="post">

    <label for="newName">New name:</label>
    <input type="text" name="newName" id="newName">


    <label for="newColor">New color:</label>
    <input type="text" name="newColor" id="newColor">

    <input type="submit" name="updatePokemon">


    <?php
    if (isset($_POST['updatePokemon'])) {
        if (isset($_POST['updatePokemon']) && !empty($_POST['newName']) && !empty($_POST['newColor'])) {
            $cardRepository->update($_POST['newName'], $_POST['newColor'], $_GET['selectedPokemon']);
            echo "Success!";
            ?> <br> <a href="index.php"> Go back </a>
            <?php
        } else {
            echo "Fill in all the fields.";
        }
    }
    ?>

</form>
</body>
</html>
