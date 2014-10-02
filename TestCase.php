<?php 
require_once('../simpletest/autorun.php');
require_once('PrintTable.php');

class TestOfLogging extends UnitTestCase {
	
	function testLogCreatesNewFileOnFirstMessage() {
		
		//@unlink('/temp/test.log');
		$printTable = new PrintTable();
		$this->assertFalse(file_exists('/temp/test.log'));
		$val = $printTable->constructTable();
		echo $val;
		$this->assertTrue($val != null);
	
	}

}

?>
