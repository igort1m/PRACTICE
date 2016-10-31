<?php
function read_array($file)
{
    $d = unserialize(file_get_contents($file));       // записываем в него сгенерированное значение
    print_r($d);
    fclose($f);
}
read_array('./out.txt');