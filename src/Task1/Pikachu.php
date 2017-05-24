<?php

namespace BinaryStudioAcademy\Task1;

class Pikachu extends AbstractPokemon
{
    public function getName(): string
    {
        return 'Pikachu';
    }

    public function battleCry(): string
    {
        return 'Pika-Pika!';
    }
}