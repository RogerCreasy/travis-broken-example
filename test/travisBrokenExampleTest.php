<?php

use RogerCreasy\travisbrokenexample\TravisBrokenExample;

class TestTravisBrokenExample extends \PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
        $expected = TravisBrokenExample::tester();
		$this->assertEquals(1+1,$expected);
  	}
}
