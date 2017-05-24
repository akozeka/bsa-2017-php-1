<?php

namespace BinaryStudioAcademy\Task1;

class PokemonTrainer
{
    public function pick(Pokemon $pokemon): string
    {
        return $pokemon->getName() . ': ' . $pokemon->battleCry();
    }
}
