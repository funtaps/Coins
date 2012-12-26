<?php
/**
 * Created by IntelliJ IDEA.
 * User: kfuntov
 * Date: 26.12.12
 * Time: 15:42
 * To change this template use File | Settings | File Templates.
 */ 
class Coin {

    private $weight;

    const NORMAL=10;
    const LIGHTEN=9;
    const HEAVIER=11;

    public function getWeight()
    {
        return $this->weight;
    }

    public function __construct($weight){
        $this->weight=$weight;
    }

    public function isNormal(){
        return $this->weight==self::NORMAL;
    }

}
