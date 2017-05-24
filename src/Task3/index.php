<?php

require __DIR__ . '/../../vendor/autoload.php';

use BinaryStudioAcademy\Task1\Bulbasaur;
use BinaryStudioAcademy\Task1\Pickachu;
use BinaryStudioAcademy\Task1\Psyduck;
use BinaryStudioAcademy\Task1\Slowpoke;
use BinaryStudioAcademy\Task3\PokemonPresenter;

// Good idea is to put your pokemons you implemented before here:
$pokemons = [new Pickachu(), new Bulbasaur(), new Psyduck(), new Slowpoke()];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Built-in Web Server</title>
</head>
<body>
    <!--Implement your task below-->
    <?php echo (new PokemonPresenter($pokemons))->present(); ?>
</body>
</html>
