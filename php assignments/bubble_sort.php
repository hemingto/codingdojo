<?php 

$numbers = array();

for($i=0; $i<50; $i++) {

	array_push($numbers, rand(1,1000));

}

$sortedArr = bubbleSort($numbers);
var_dump($sortedArr);
 
function bubbleSort($arr) {
    $sorted = false;
    while (false === $sorted) {
        $sorted = true;
        for ($i = 0; $i < count($arr)-1; ++$i) {
            $current = $arr[$i];
            $next = $arr[$i+1];
            if ($next < $current) {
                $arr[$i] = $next;
                $arr[$i+1] = $current;
                $sorted = false;
            }
        }
    }
    return $arr;
}

?>