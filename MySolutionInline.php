<?php
/**
 * Created by IntelliJ IDEA.
 * User: kfuntov
 * Date: 26.12.12
 * Time: 16:47
 * To change this template use File | Settings | File Templates.
 */
class MySolutionInline extends Solution
{

    public function solute()
    {
        $w1 = $this->weight(array(0, 1, 2, 3), array(4, 5, 6, 7));
        if ($w1 === Weighing::EQUALS) {
            //W1 EQUALS START
            $w2 = $this->weight(array(8, 9, 10), array(1, 2, 3));
            if ($w2 === Weighing::EQUALS) {
                $this->result_coin_index = 11;
            } else {
                $w3 = $this->weight(array(8), array(9));
                if ($w3 === Weighing::EQUALS) {
                    $this->result_coin_index = 10;
                } else if ($w3 === $w2) {
                    $this->result_coin_index = 8;
                } else {
                    $this->result_coin_index = 9;
                }
            }
            //W1 EQUALS END
        } else {
            //W1 DON'T EQUALS
            $w2 = $this->weight(array(0, 1, 4, 5), array(6, 8, 10, 11));
            if ($w2 === Weighing::EQUALS) {
                $w3 = $this->weight(array(2), array(3));
                switch ($w3) {
                    case Weighing::EQUALS:
                        $this->result_coin_index = 7;
                        break;
                    case $w1:
                        $this->result_coin_index = 2;
                        break;
                    default:
                        $this->result_coin_index = 3;
                }
                return;
            } else if ($w2 === $w1) {
                $w3 = $this->weight(array(0), array(1));
                switch ($w3) {
                    case Weighing::EQUALS:
                        $this->result_coin_index = 6;
                        break;
                    case $w1:
                        $this->result_coin_index = 0;
                        break;
                    default:
                        $this->result_coin_index = 1;
                }
            } else {
                $w3 = $this->weight(array(4), array(5));
                if ($w3 == $w1) {
                    $this->result_coin_index = 5;
                } else {
                    $this->result_coin_index = 4;
                }
            }
            //W1 DON'T EQUALS END
        }
    }

}
