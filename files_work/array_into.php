<?php
function write_array($array)
{
    $other_mass = serialize($array); //генерация значения
    $f = fopen('out.txt', 'w');    //открываем файл
    fwrite($f, $other_mass);       // записываем в него сгенерированное значение
    fclose($f);
}
function write_array($array){
    file_put_contents('./out.txt', serialize($array));
}
$array=['5'=>'1','123'=>'2','sadf'=>'3'];
write_array($array);
