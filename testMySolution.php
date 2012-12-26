<?php
/**
 * Created by IntelliJ IDEA.
 * User: kfuntov
 * Date: 26.12.12
 * Time: 16:47
 * To change this template use File | Settings | File Templates.
 */

require 'Coin.php';
require 'CoinGroup.php';
require 'Weighing.php';
require 'Solution.php';
require 'MySolution.php';
require 'MySolutionInline.php';

for($bad_coin_index=0; $bad_coin_index<12; $bad_coin_index++){
    $coins=array();
    for($coin_index=0;$coin_index<12;$coin_index++){
        if($coin_index==$bad_coin_index)
            $coins[]=new Coin(Coin::HEAVIER);
        else
            $coins[]=new Coin(Coin::NORMAL);
    }
    $cg=new CoinGroup($coins);
    $solution=new MySolutionInline($cg);
    $solution->solute();
    if($solution->getResult()===$bad_coin_index){
        echo $bad_coin_index." ";
    }
    else{
        echo "AAAAAAAA";
        var_dump($cg);
        die();
    }
}
echo "\n";
for($bad_coin_index=0; $bad_coin_index<12; $bad_coin_index++){
    $coins=array();
    for($coin_index=0;$coin_index<12;$coin_index++){
        if($coin_index==$bad_coin_index)
            $coins[]=new Coin(Coin::LIGHTEN);
        else
            $coins[]=new Coin(Coin::NORMAL);
    }
    $cg=new CoinGroup($coins);
    $solution=new MySolutionInline($cg);
    $solution->solute();
    if($solution->getResult()===$bad_coin_index){
        echo $bad_coin_index." ";
    }
    else{
        echo "AAAAAAAA";
        var_dump($cg);
        die();
    }
}