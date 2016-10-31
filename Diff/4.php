<?php
$number = 6;
$i = 2;
$arr = array();
while ($number != 1)
{
    if ($number % $i == 0)
    {
        $arr[] = $i;
        $number /= $i;
    }
    else
    {
        $i++;
    }
}
if ($arr[0] == $i)
{
    echo 'Простое число';
}