<?php
/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 12/20/17
 * Time: 8:09 PM
 */

class LivedTimeCalculator
{
    public function GetLiveHours($time)

    {

        if (!$time) {
            return "Time must not be empty!";
        }

        $today = strtotime(date('Y-m-d'));
        $birthday = strtotime($time);

        if ($birthday >= $today) {
            return "Not available in time";
        }

        if ($time === "string") {
            return "Do not enter text";
        }



        return "";
    }
}