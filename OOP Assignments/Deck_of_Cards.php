<?php

class Deck {
	
	public $cards;
	public $pips;
	public $standard_cards;
	public $reset;
	public function __construct() {

		$suits = array("Clubs","Diamonds", "Hearts", "Spades");
		$cards = array("Ace",2,3,4,5,6,7,8,9,10,"Jack", "Queen", "King");
		// $reset = 
		$deck_of_cards = array();
		
		for($i=0; $i<count($suits); $i++) {
			
			for($j=0; $j<count($cards); $j++) {
				$card = $cards[$j] . " of " . $suits[$i];
				array_push($deck_of_cards, $card);
			}
		}

		$this->standard_cards = $deck_of_cards;
		$this->cards = $cards;
		$this->pips = $suits;
		$this->reset = $deck_of_cards;
		return $this;

	}

	public function shuffle() {
		shuffle($this->standard_cards);
		return $this;
	}
	public function reset() {
		$this->standard_cards = $this->reset;
		return $this;
	}
	public function deal() {
		$random = rand(0,51);
		$dealt_card = $this->standard_cards[$random];
		unset($this->standard_cards[$random]);
		echo "You've been dealt a" . " " . $dealt_card . "</br>";
		return $this;
	}
}

class Player extends Deck {
	public $name;
	public $hand;
	public function __construct($name) {
		parent::__construct();
		$this->name = $name;
		
	}
	public function draw() {
		
		$this->hand= array();

		for($i=0; $i<2; $i++) {
			$random = rand(0,51);
			$dealt_card = $this->standard_cards[$random];
			unset($this->standard_cards[$random]);
			array_push($this->hand,$dealt_card);
			echo "You've been dealt a" . " " . $dealt_card . "</br>";
		}
		return $this;
	}

	public function discard($number) {	

		for($i=0; $i<$number; $i++) {
			array_push($this->standard_cards, $this->hand[$i]);
			unset($this->hand[$i]);
			echo "You discarded a card </br>";
		}
	}
	public function blackjack() {
		if($this->hand == null) {
			echo "You have to draw a hand first";
		} else {
			echo "Don't play Blackjack you'll lose all your money!";
		}
	}
	
}


$new_player = new Player("Calvin");

$new_player->draw()->discard(2);

?>