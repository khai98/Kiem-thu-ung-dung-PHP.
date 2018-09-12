<?php
/**
 * Created by PhpStorm.
 * User: hoangkhai
 * Date: 12/09/2018
 * Time: 10:57
 */

use PHPUnit\Framework\TestCase;

require_once 'LivedTimeCalculator.php';


class LivedTimeCalculatorTest extends TestCase
{

    function testGetLiveHours()
    {
        $time = "";
        $expected = 'Time must not be empty!';
        $actual = LivedTimeCalculator::GetLiveHours($time);
        $this->assertEquals($expected, $actual);
    }


    function testExceedTimeLive()
    {

        $time = date('m-d-Y');
        $expected = 'Not available in time';
        $actual = LivedTimeCalculator::GetLiveHours($time);
        $this->assertEquals($expected, $actual);

    }


}
