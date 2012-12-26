<?php
/**
 * Created by IntelliJ IDEA.
 * User: kfuntov
 * Date: 26.12.12
 * Time: 16:47
 * To change this template use File | Settings | File Templates.
 */
class MySolution extends Solution
{

    public function solute()
    {
        $w1 = $this->weight(array(0, 1, 2, 3), array(4, 5, 6, 7));
        if ($w1 === Weighing::EQUALS) {
            $this->w1Equals();
        } else {
            $this->w1Dont($w1);
        }
    }

    private function w1Equals()
    {
        $w2 = $this->weight(array(8, 9, 10), array(1, 2, 3));
        if ($w2 === Weighing::EQUALS) {
            $this->result_coin_index = 11;
        } else {
            $this->w1EqualsW2Dont($w2);
        }
    }

    private function w1EqualsW2Dont($w2_result)
    {
        $w3 = $this->weight(array(8), array(9));
        if ($w3 === Weighing::EQUALS) {
            $this->result_coin_index = 10;
        } else if ($w3 === $w2_result) {
            $this->result_coin_index = 8;
        } else {
            $this->result_coin_index = 9;
        }
    }

    private function w1Dont($w1_result)
    {
        $w2 = $this->weight(array(0, 1, 4, 5), array(6, 8, 10, 11));
        if ($w2 === Weighing::EQUALS) {
            $this->w1DontW2Equals($w1_result);
            return;
        } else if ($w2 === $w1_result) {
            $this->w1Dontw2Same($w1_result);
        } else {
            $this->w1Dontw2Diffrent($w1_result);
        }

    }

    private function w1DontW2Equals($w1_result)
    {
        $w3 = $this->weight(array(2), array(3));
        switch ($w3) {
            case Weighing::EQUALS:
                $this->result_coin_index = 7;
                break;
            case $w1_result:
                $this->result_coin_index = 2;
                break;
            default:
                $this->result_coin_index = 3;
        }
    }

    private function w1Dontw2Diffrent($w1_result)
    {
        $w3 = $this->weight(array(4), array(5));
        if ($w3 == $w1_result) {
            $this->result_coin_index = 5;
        } else {
            $this->result_coin_index = 4;
        }

    }

    private function w1Dontw2Same($w1_result)
    {

        $w3 = $this->weight(array(0), array(1));
        switch ($w3) {
            case Weighing::EQUALS:
                $this->result_coin_index = 6;
                break;
            case $w1_result:
                $this->result_coin_index = 0;
                break;
            default:
                $this->result_coin_index = 1;
        }

    }

}
