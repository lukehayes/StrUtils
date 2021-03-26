<?php
namespace LH;

/**
 * Utility helper functions that make working with strings
 * a little simpler.
 *
 * @package LH
 */
class StrUtils
{
    /**
     * Accept a string and return it in Pascal Case form.
     *
     * @param string $str The string to be transformed into Pascal Case.
     * @static
     * @return string
     */
    public static function PascalCase(string $str) : string
    {
        $res = array_map(function($s){

            return ucfirst($s);

        }, explode(" ", $str));

        return implode("", $res);
    }

    /**
     * Accept a string and return it in Snake Case form.
     *
     * @param string $str The string to be transformed into Snake Case.
     * @static
     * @return string
     */
    public static function SnakeCase(string $str) : string
    {
        return str_replace(" ", "_", $str);
    }

    /**
     * Get the size of the string.
     *
     * @param string $str The string to get the size of.
     * @static
     * @return int
     */
    public static function Size(string $str) : int
    {
        return strlen($str);
    }
}

