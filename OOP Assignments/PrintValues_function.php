<?php

 public function printValues()
 {
    $current = $this->head;
    while($current)
    {
       echo $current->value . '<br>';
       $current = $current->next;
    }
 }
}

$newList->add(1);
$newList->add(2);
$newList->add(3);
$newList->add(4);
$newList->add(5);
var_dump($newList);

$newList->printValues();

?>