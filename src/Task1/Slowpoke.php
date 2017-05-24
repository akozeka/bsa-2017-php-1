<?php

namespace BinaryStudioAcademy\Task1;

class Slowpoke extends AbstractPokemon
{
    public function getName(): string
    {
        return 'Slowpoke';
    }

    public function battleCry(): string
    {
        return 'So slow!';
    }
}