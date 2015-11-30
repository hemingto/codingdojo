<?php 

$numbers = array();

$random_numbers = rand(1,1000);

for($i=0; $i<1000; $i++) {

	array_push($numbers, rand(1,1000));

}

function insertionSort($array) {
  
  for($i = 0; $i < count($array); $i++) {

    $tmp = $array[$i];

    for($j = $i - 1; $j >= 0 && ($array[$j] > $tmp); $j--) 

      $array[$j+1] = $array[$j];
    }
   
    $array[$j+1] = $tmp;
  }
  var_dump($array);
  echo microtime ();
}


insertionSort($numbers);

?>