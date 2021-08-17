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

    <p> Are you sure you want to delete <?php echo $_GET['selectedPokemon'] ?> ?</p>
    <input type="submit" value="Delete" name="deletePokemon">
    <br> <a href="index.php"> Go back </a>
</form>

<?php
if (isset($_POST['deletePokemon'])) {
    $cardRepository->delete($_GET['selectedPokemon']);
    echo "Deleted!";
}
?>


</body>
</html>
