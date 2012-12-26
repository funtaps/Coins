<?php
/**
 * Created by IntelliJ IDEA.
 * User: kfuntov
 * Date: 26.12.12
 * Time: 16:24
 * To change this template use File | Settings | File Templates.
 */

require "Weighing.php";
class WeighingTest extends PHPUnit_Framework_TestCase{

    public function testEquals()
    {
        $w=new  Weighing(CoinGroup::normal(3), CoinGroup::normal(3));
        $this->assertEquals(Weighing::EQUALS, $w->result());
    }

    public function testLeft()
    {
        $cg=new CoinGroup(array(
            new Coin(Coin::NORMAL),
            new Coin(Coin::NORMAL),
            new Coin(Coin::HEAVIER)
        ));
        $w=new  Weighing($cg, CoinGroup::normal(3));
        $this->assertEquals(Weighing::LEFT_IS_HEAVIER, $w->result());
        $cg=new CoinGroup(array(
            new Coin(Coin::NORMAL),
            new Coin(Coin::NORMAL),
            new Coin(Coin::LIGHTEN)
        ));
        $w=new  Weighing(CoinGroup::normal(3), $cg);
        $this->assertEquals(Weighing::LEFT_IS_HEAVIER, $w->result());

    }


    public function testRight()
    {
        $cg=new CoinGroup(array(
            new Coin(Coin::NORMAL),
            new Coin(Coin::NORMAL),
            new Coin(Coin::LIGHTEN)
        ));
        $w=new  Weighing($cg, CoinGroup::normal(3));
        $this->assertEquals(Weighing::RIGHT_IS_HEAVIER, $w->result());
        $cg=new CoinGroup(array(
            new Coin(Coin::NORMAL),
            new Coin(Coin::NORMAL),
            new Coin(Coin::HEAVIER)
        ));
        $w=new  Weighing(CoinGroup::normal(3), $cg);
        $this->assertEquals(Weighing::RIGHT_IS_HEAVIER, $w->result());

    }
}
