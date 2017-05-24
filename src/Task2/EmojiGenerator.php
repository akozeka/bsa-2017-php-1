<?php

namespace BinaryStudioAcademy\Task2;

class EmojiGenerator
{
    const EMOJIS = [
        "\u{1f600}",
        "\u{1f603}",
        "\u{1f604}",
        "\u{1f601}",
        "\u{1f606}",
        "\u{1f605}",
        "\u{1f602}",
    ];

    public function generate()
    {
        foreach (self::EMOJIS as $emoji) {
            yield $emoji;
        }
    }
}
