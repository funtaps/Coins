<?php
/**
 * Created by IntelliJ IDEA.
 * User: kfuntov
 * Date: 26.12.12
 * Time: 16:44
 * To change this template use File | Settings | File Templates.
 */ 
class Solution {
    /**
     * @var CoinGroup
     */
    private $coin_group;

    protected  $result_coin_index=false;

    public function __construct($coin_group)
    {
        $this->coin_group=$coin_group;
    }

    public function solute(){}

    public function getResult(){
        return $this->result_coin_index;
    }

    protected function weight($group1_indexes, $group2_indexes){
        $w=new Weighing(
            $this->getCoinGroupByIds($group1_indexes),
            $this->getCoinGroupByIds($group2_indexes)
        );
        return $w->result();
    }

    private function getCoinGroupByIds($indexes){
        $coins=array();
        foreach($indexes as $i){
            $coins[]=$this->coin_group->get($i);
        }
        return new CoinGroup($coins);
    }


}
