<?php

 namespace Minifier;


class TinyMinify
{
    public static function html(string $html, array $options = []) : string
    {
        $minifier = new TinyHtmlMinifier($options);
        return $minifier->minify($html);
    }
}
