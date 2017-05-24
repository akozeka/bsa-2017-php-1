<?php

namespace BinaryStudioAcademy\Task1;

class Psyduck extends AbstractPokemon
{
    public function getName(): string
    {
        return 'Psyduck';
    }

    public function battleCry(): string
    {
        return 'PSY!PSY!PSY!';
    }
}