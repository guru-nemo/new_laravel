<?php
class A{
	public $prop;
}
function f($o){
	$o->prop = 5;
	echo $o->prop;
}

$object = new A();
$object->prop = 2;
f($object);
echo $object->prop;

//функция чисел Фибоначчи 
function fibonacci($a, $b){

   return $a+$b;

}

 

$a = 0;

$b = 1;

for($i=0;$i<5;$i++){

   echo fibonacci($a, $b).',';

} 

function add_end($x){
	$str = 'программист';
	$arr = [
		[0, 5, 6, 7, 8, 9],
		[1],
		[2, 3, 4]
	];
	$arr_letter = ['ов', '', 'а'];
	$last_symbol = (int)substr($x, -1);
	for($i = 0; $i < 3; $i++){
		if(in_array($last_symbol, $arr[$i])){
			$x = $x . " $str{$arr_letter[$i]}";
			break;
		}
	}
	return $x;
}

echo add_end(98);

/////////////////////////

$tree = array (
   "level 1" => array ("level 1.1", "level 1.2"),
   "level 2",
   "level 3" => array ("level 3.1", "level 3.2" => array ("level 3.2.1", "level 3.2.2"), "level 3.3"),
   "level 4" => array ("level 4.1", "level 4.2", "level 4.3", "level 4.4"),
);

echo '</br>';

function recurs($arr, $symbol = '+'){
	foreach($arr as $key => $value){
		$str = '</br>';
		if(is_array($value)){
			echo $symbol . $key;
			echo '=>';
			echo $str;
			recurs($arr[$key], $symbol . '+');
		} else {
			echo $symbol . $value;
			echo $str;
		}
	}
}

recurs($tree);

$str = '1234567899';
$pattern = '+7-%-%%-%%%-%%%%';
$new_str = vsprintf(str_replace('%', '%s', $pattern), str_split($str));
echo $new_str;
$arr = array(1, 5, 7, 9, 2, 4, 6, 8);
	$start = 0;
	$end = sizeOf($arr) - 1;
    while ($start < $end)
    {
        $temp = $arr[$start]; 
        $arr[$start] = $arr[$end];
        $arr[$end] = $temp;
        $start++;
        $end--;
    } 
	var_dump($arr);

$a = ['a', 'b', 3=>'c', 'd'];
$b = ['c', 'd', 'e', 'b'];
$r = array_diff($a, $b);
var_dump(array_values($r));
$h = '12345';
$h[$h[1]] = '2';
echo '+++';
echo $h;

$time1 = '2020-11-10';
$time2 = '2020-11-24';
$datetime1 = new DateTime($time1);
$datetime2 = new DateTime($time2);
$dw1 = date('w', strtotime($time1));
$dw2 = date('w', strtotime($time2));
$dif = $datetime1->diff($datetime2);
$int_dif = intdiv(1 + $dif->d, 7);
if( (((int)date('w', strtotime($time1)) === 2) || ((int)date('w', strtotime($time1)) === 2)) && ($int_dif < 1) ){
	echo '1 вторник';
} else if($int_dif >= 1){
	echo $int_dif . 'вторников';
} else {
	echo 'вторников нет';
}

$a = '1';
$b = &$a;
$b = "2$b";
echo $a.", ".$b;
?>
