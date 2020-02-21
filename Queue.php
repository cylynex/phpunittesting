<?php

class Queue {
	
	protected $items = [];
	
	public function Push($item) {
		$this -> items[] = $item;
	}
	
	public function Pop() {
		return array_shift($this->items);
	}
	
	public function GetCount() {
		//return sizeof($items);
		return count($this->items);
	}
	
}