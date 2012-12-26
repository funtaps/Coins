<?php
/**
 * Created by IntelliJ IDEA.
 * User: kfuntov
 * Date: 26.12.12
 * Time: 16:26
 * To change this template use File | Settings | File Templates.
 */ 
class Weighing {
    /**
     * @var CoinGroup
     */
    private $group1;
    /**
     * @var CoinGroup
     */
    private $group2;

    const EQUALS=0;
    const LEFT_IS_HEAVIER=1;
    const RIGHT_IS_HEAVIER=2;

    public function __construct(CoinGroup $group1, CoinGroup $group2)
    {
        $this->group1=$group1;
        $this->group2=$group2;
    }

    public function result()
    {
        $w1=$this->group1->getWeight();
        $w2=$this->group2->getWeight();
        if($w1===$w2)
            return self::EQUALS;
        if($w1>$w2)
            return self::LEFT_IS_HEAVIER;
        if($w1<$w2)
            return self::RIGHT_IS_HEAVIER;
        throw new Exception("WHAT?".var_export(array($w1,$w2),true));
    }

}
