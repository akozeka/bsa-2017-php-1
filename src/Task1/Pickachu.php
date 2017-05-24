<?php

namespace BinaryStudioAcademy\Task1;

class Pickachu extends AbstractPokemon
{
    public function getName(): string
    {
        return 'Pickachu';
    }

    public function battleCry(): string
    {
        return 'Pika-Pika!';
    }
}