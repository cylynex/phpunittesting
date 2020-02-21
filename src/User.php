<?php

class User {

	public $firstName;
	public $lastName;
	
	public function GetFullName() {
		return trim("$this->firstName $this->lastName");
	}
	
}