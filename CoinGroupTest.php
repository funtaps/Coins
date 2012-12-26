<?php
/**
 * Created by IntelliJ IDEA.
 * User: kfuntov
 * Date: 26.12.12
 * Time: 16:10
 * To change this template use File | Settings | File Templates.
 */
require 'CoinGroup.php';
class CoinGroupTest extends PHPUnit_Framework_TestCase{


    /**
     * @var CoinGroup
     */
    protected $cg;

    public function setUp()
    {
        $this->cg=new CoinGroup(array(
            new Coin(Coin::NORMAL),
            new Coin(Coin::HEAVIER)
        ));
    }
    public function testConstruct()
    {
        $this->assertEquals(new Coin(Coin::HEAVIER), $this->cg->get(1));
    }

    public function testGetSize()
    {
        $this->assertEquals(2,$this->cg->getSize());
    }

    public function testNormalGroup()
    {
        $cg=CoinGroup::normal(3);
        $this->assertEquals(3,$cg->getSize());
        $this->assertEquals(new Coin(Coin::NORMAL),$cg->get(0));
        $this->assertEquals(new Coin(Coin::NORMAL),$cg->get(1));
        $this->assertEquals(new Coin(Coin::NORMAL),$cg->get(2));
    }

    public function testGetWeight()
    {
        $this->assertEquals(Coin::NORMAL+Coin::HEAVIER, $this->cg->getWeight());
    }


}
