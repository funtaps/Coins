<?php
/**
 * Created by IntelliJ IDEA.
 * User: kfuntov
 * Date: 26.12.12
 * Time: 16:16
 * To change this template use File | Settings | File Templates.
 */

class CoinGroup {
    /**
     * @var Coin[]
     */
    private $group;

    public function __construct(array $coins){
        $this->group=$coins;
    }

    public function get($index){
        return $this->group[$index];
    }

    public function getSize()
    {
        return count($this->group);
    }

    public function getWeight()
    {
        $sum=0;
        foreach($this->group as $coin){
            $sum+=$coin->getWeight();
        }
        return $sum;
    }

    public static function normal($size)
    {
        $normal_coin=new Coin(Coin::NORMAL);
        return new CoinGroup(array_fill(0,$size,$normal_coin));
    }
}
