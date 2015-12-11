<?php

 //the remove function requires that we find the value we want to remove from our list
 public function remove($val)
 {
   //lets start by checking if the node we want to remove is the head
   if($this->head->value == $val)
   {
      //its the head! lets change the head pointer
      $this->head = $this->head->next;
   }
   else
   {
      //lets find the node and make sure we dont hit the end of the node list
      $current = $this->head;
      while($current->next->value != $val && $current->next)
      {
        //move our pointer forward
        $current = $current->next;
      }
      // we either made it to the end or found our node, either way we can change the pointers!
      //create a temp to hold onto whatever is ahead of the node we found
      $temp = $current->next->next;
      //now set our current node's next to the node thats on the other side of the node we want to remove
      $current->next = $temp;
   }
 }
}

$newList->remove(1);
$newList->remove(3);
$newList->remove(5);

var_dump($newList);
?>