<?php

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase {
	
	public function testAddReturnsCorrectSum() {
		
		require("functions.php");
		$this->assertEquals(4,Add(2,2));
		$this->assertEquals(8,Add(3,5));
		
	}
	
	
	public function testAddDoesNotReturnIncorrectSum() {
		$this->assertNotEquals(5,Add(2,2));
	}
	
}