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
     * Accept a string and return it in Camel Case form.
     *
     * @param string $str The string to be transformed into Camel Case.
     * @static
     * @return string
     */
    public static function CamelCase(string $str) : string
    {
        return lcfirst( self::PascalCase($str) );
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

    /**
     * Randomize the case of the letters of a string.
     *
     * @param string $str The string to have its cast randomized. Passed by reference.
     * @static
     * @return string
     */
    public static function RandomizeCase(string &$str) : string
    {
        for($i = 0; $i <= strlen($str) - 1; $i++)
        {
            if(rand(0,1))
            {
                $str[$i] = strtoupper($str[$i]);
            }
        }
    }

    /**
     * Convert a single character to its unsigned int representation.
     *
     * @param string $str The single string character to be converted.
     * @static
     * @return int
     */
    public static function ConvertToInt(string $str) : int
    {
        return ord($str);
    }

}

