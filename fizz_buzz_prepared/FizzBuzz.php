<?php
/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 12/20/17
 * Time: 8:09 PM
 */

class FizzBuzz
{
    static function read($number)
    {
        if ($number == 0) {
            return "Invalid number!";
        } else if ($number == 1) {
            return "1";
        } else if ($number == 3) {
            return "Fizz";
        } else if ($number == 5) {
            return "Buzz";
        } else if ($number == 15) {
            return "FizzBuzz";
        };
        return $number;
    }
}