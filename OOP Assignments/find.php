<?php

 public function find($val)
 {
   $current = $this->head;
   while($current != null)
   {
      if($current->value == $val)
      {
          return $current;
      }
      $current = $current->next;
   }
   return false;
 }
}

var_dump($newList->find(3));

var_dump($newList->find(99));


?>