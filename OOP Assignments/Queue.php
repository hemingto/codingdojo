<?php

class Node
{
 public $next;
 public $value;
 public function __construct($val)
 {
  $this->value = $val;
  $this->next = null;
 }
}

class Queue
{
 private $front; // the front of our Queue
 private $rear; // the rear of our Queue
 public $maxSize; // how many elements can be in our queue
 public function __construct($val)
 {
  $this->front = null;
  $this->rear = null;
  $this->maxSize = $val;
 }
 public function enqueue($val) // it will add an element to the end of the Queue
 {
	if($this->front == null)
	{
		$this->front = new Node($val);
	}
	else
	{
		$current = $this->front;
		
		while($current->next)
		{
			$current = $current->next;
		}
		
		$current->next = new Node($val);
	}
	return $this;
 }
 public function dequeue() // it will remove an element from the front of the Queue
 {

   $this->front = $this->front->next;

   return $this;
 }
 
 public function front() // returns the element in the front of your Queue
 {
 	$front = $this->front;
 	foreach($front as $value)
 	{
 		echo $value;
 		echo "</br>";
 	}
 	return $this;
 }
 
 public function rear() // returns the element in the rear of your Queue
 {
 	
 	$current = $this->front;
    while($current->next)
    {
    	$current = $current->next;
    }

    foreach($current as $value)
    {
    	echo $value;
    	echo "</br>";
    }
    
 	return $this;
 }
 
 public function isEmpty() // returns true if the Queue is empty
 {
 	if($this->front == null)
 	{
 		echo "The queue is empty";
 		return true;
 	} else {
 		echo "hmm";
 	}
 	return $this;
 }
 
 public function isFull() // returns true if the Queue is full
 {
 	$current = $this->front;
 	$counter=0;
    while($current)
    {
       $counter+=1;
       $current = $current->next;
    }
    if($counter >= $this->maxSize) {
    	echo "Que is full!";
    }
    return $this;
 }
}

$q = new Queue(5); // instantiates the Queue class with a maxSize attribute of 5
$q->isEmpty(); // returns true
$q->enqueue(100); // Queue: 100
$q->rear(); // returns 100
$q->front(); // returns 100
$q->enqueue(20); // Queue: 100, 20
$q->enqueue(2); // Queue: 100, 20, 2
$q->dequeue(); // Queue: 20, 2
$q->enqueue(500); // Queue: 20, 2, 500
$q->enqueue(12); // Queue: 20, 2, 500, 12
$q->enqueue(30); // Queue: 20, 2, 500, 12, 30
$q->isFull(); // returns true


?>