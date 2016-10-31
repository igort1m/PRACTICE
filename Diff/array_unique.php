<?php
function arr_un($arr){
    foreach ($arr as $b){
        $c[$b] = '';
    }
//    echo '<pre>';
//    var_dump($c);
//    echo '</pre>';
    foreach ($c as $key => $d){
        $f[] = $key;
    }
    return $f;
}
$a= array(1,"sdfs","sdfs",2,3,4,5,6,7);
print_r(arr_un($a));

<?php
$arr = array('test'=>'33', '2'=> 'test', 'text'=>'text');
$a = isset($arr['test']) ? key($arr) : 'NO';
echo $a;