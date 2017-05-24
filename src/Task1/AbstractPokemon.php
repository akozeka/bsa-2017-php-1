<?php

namespace BinaryStudioAcademy\Task1;

abstract class AbstractPokemon implements Pokemon
{
    const BASE_IMAGE_URL = 'https://img.pokemondb.net/artwork/';

    public abstract function getName(): string;

    public function imageUrl(): string
    {
        return self::BASE_IMAGE_URL . strtolower($this->getName()) . '.jpg';
    }
}