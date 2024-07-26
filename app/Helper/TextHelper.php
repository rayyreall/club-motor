<?php

namespace clubMotor\Helper;

class TextHelper
{
    public static function truncateText(string $text, int $maxLength): string
    {
        if (strlen($text) > $maxLength) {
            return substr($text, 0, $maxLength) . '...';
        }
        return $text;
    }
}