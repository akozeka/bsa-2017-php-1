<?php

namespace BinaryStudioAcademy\Task2;

class EmojiGenerator
{
    public function generate()
    {
        $emojiUnicodeCodepoints = ['1f600', '1f603', '1f604', '1f601', '1f606', '1f605', '1f602'];

        foreach ($emojiUnicodeCodepoints as $codepoint) {
            yield mb_convert_encoding("&#x{$codepoint};", 'UTF-8', 'HTML-ENTITIES');
        }
    }
}
