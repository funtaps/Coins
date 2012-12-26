<?php
/**
 * Created by IntelliJ IDEA.
 * User: kfuntov
 * Date: 26.12.12
 * Time: 15:43
 * To change this template use File | Settings | File Templates.
 */
require 'Coin.php';
class CoinTest extends PHPUnit_Framework_TestCase{

    /**
     * @var Coin
     */
    protected $c;

    public function setUp(){
        $this->c=new Coin(Coin::HEAVIER);
    }

    public function testConstructor(){
        $this->assertEquals(Coin::HEAVIER,$this->c->getWeight());
    }

    public function testNormal(){
        $this->assertFalse($this->c->isNormal());
    }
}
