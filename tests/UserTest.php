<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {
	
	public function testReturnsFullName() {
		// set to autoload
		//require("User.php");
		
		$user = new User;
		$user->firstName = "John";
		$user->lastName = "Tiger";
		
		$this->assertEquals('John Tiger', $user->GetFullName());
			
	}
	
	
	public function testFullNameEmptyByDefault() {
		$user = new User;
		
		$this->assertEquals('', $user->GetFullName());
	}
	
    
    
    public function testTrueIsTrue() {
    	$trueFalse = true;
		$this->assertTrue(true,$trueFalse);
    }
 
}