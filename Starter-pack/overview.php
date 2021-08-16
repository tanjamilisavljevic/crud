<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>

<h1>Goodcard - track your collection of Pokémon cards</h1>

<ul>
    <?php foreach ($cards as $card) : ?>
        <li><?= $card['name'] ?></li>
        <li><?= "Color: " . $card['color'] ?></li>
    <?php endforeach; ?>
</ul>

<form action="" method="post">

        <label for="name">Name:</label>
        <input type="text" name="name" id="name">


        <label for="color">Color:</label>
        <input type="text" name="color" id="color">

    <button type="submit" value="Submit"> Add to cards </button>
    <?php if (!empty($endMessage)) : ?>
        <p> <?php echo $endMessage ?> </p>
    <?php endif; ?>
</form>

</body>
</html>