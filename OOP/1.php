<?php
function sum_the_time($time1, $time2) {
    $times = array($time1, $time2);
    $seconds = 0;
    foreach ($times as $time)
    {
        list($hour,$minute,$second) = explode(':', $time);
        $seconds += $hour*3600;
        $seconds += $minute*60;
        $seconds += $second;
    }
    $hours = floor($seconds/3600);
    $seconds -= $hours*3600;
    $minutes  = floor($seconds/60);
    $seconds -= $minutes*60;
    if($seconds < 9)
    {
        $seconds = "0".$seconds;
    }
    if($minutes < 9)
    {
        $minutes = "0".$minutes;
    }
    if($hours < 9)
    {
        $hours = "0".$hours;
    }
    return "{$hours}:{$minutes}:{$seconds}";
}
echo sum_the_time("01:50:00", "00:50:00");