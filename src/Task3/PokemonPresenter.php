<?php

namespace BinaryStudioAcademy\Task3;

class PokemonPresenter
{
    private $pokemons;

    public function __construct(array $pokemons)
    {
        $this->pokemons = $pokemons;
    }

    /**
     * Returns html-list (ul-li) of images (img)
     *
     * @return string
     */
    public function present(): string
    {
        return
            '<ul>' .
            array_reduce($this->pokemons, function ($html, $pokemon) {
                return $html . "<li><img src=\"{$pokemon->imageUrl()}\"></li>";
            }) .
            '</ul>';
    }
}
