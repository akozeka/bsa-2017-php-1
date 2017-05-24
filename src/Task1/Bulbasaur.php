<?php

namespace BinaryStudioAcademy\Task1;

class Bulbasaur extends AbstractPokemon
{
    public function getName(): string
    {
        return 'Bulbasaur';
    }

    public function battleCry(): string
    {
        return 'Bool bool!';
    }
}