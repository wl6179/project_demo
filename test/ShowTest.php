<?php
//require_once '../vendor/autoload.php';
use PHPUnit\Framework\TestCase;

//require_once '../src/Show.php';


class ShowTest extends TestCase
{
    public function testShowMoney(){
        //$unit=new \app\PhpUnitClass("init");
        //$this->assertAttributeEquals("init","att",$unit);
        $unit = new \app\money\Show();
        $this->assertEquals(-1, $unit->showMoney());
    }
    public function testLostMoney(){
        $unit = new \app\money\Show();
        $this->assertEquals(-1, $unit->lostMoney());
    }
}
