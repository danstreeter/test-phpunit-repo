<?php

require('src/classes/blank.class.php');

class BlankTest extends PHPUnit_Framework_TestCase
{

    public function testNothing()
    {
        $value = true;
        $this->assertTrue($value);
    }

    public function testReturnTrueActuallyReturnsTrue()
    {
    	$obj = new dswebistes\blankClass\Blank();

    	$res = $obj->returnTrue();
    	$this->assertTrue($res);
    }

    public function testReturnFalseActuallyReturnsFalse()
    {
    	$obj = new dswebistes\blankClass\Blank();

    	$res = $obj->returnFalse();
    	$this->assertFalse($res);
    }
}
?>