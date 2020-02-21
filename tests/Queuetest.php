<?php

use PHPUnit\Framework\TestCase;
require("Queue.php");

class QueueTest extends TestCase {
	protected $queue;	
	
	protected function Setup(): void {
		$this->queue = new Queue;
	}
	
	
	
	public function testNewQueueIsEmpty() {		
		$this->assertEquals(0,$this->queue->Getcount());
	}
	
	
	public function testItemAddedToQueue() {
		$this->queue->Push('testitem');
		$this->assertEquals(1,$this->queue->GetCount());
	}
	
	
	public function testRemoveItemFromQueue() {
		$this->queue->Push('remover');
		$item = $this->queue->Pop();
		$this->assertEquals(0,$this->queue->GetCount());
		$this->assertEquals('remover', $item);
	}

	
	public function testRemoveOrder() {
		$this->queue->Push('item1');
		$this->queue->Push('item2');
		$item = $this->queue->Pop();
		$this->assertEquals('item1',$item);		
	}
	
	
}