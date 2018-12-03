<?php

namespace frontend\components;

use yii\base\Widget;

class TimeReader extends Widget
{
    public $time;

    public function run()
    {
        //echo 60*60;
        //die;

        /**Day and Hour Calculation**/
        /*echo $d =round (50/24) .'d';
        echo $d = 50%24 .'h';*/



       // echo 26%24;
        //die;
        $timestamp = strtotime($this->time);
        $t1 = time() - $timestamp;
        $t2 = $t1 / 60;
        $t3 = $t2 / 60;
        $t4 = $t3 - (int)$t3;
        $d = $t3>24 ?round($t3/24).'d ':null;
        $h = $t3<24 ? round($t3) . 'h ':($t3%24).'h ';
        $m = round($t4 * 60,0).'m';

        return   $d.$h.$m;
    }
}