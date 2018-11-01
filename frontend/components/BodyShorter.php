<?php

namespace frontend\components;

use yii\base\Widget;
use yii\helpers\Html;

class BodyShorter extends Widget
{
    public $body;
    public $id;

    public function run()
    {
        if (strlen($this->body) > 250) {
            return  substr($this->body, 0, 250) . Html::a('...Read More',['/posts/view-post','id'=>$this->id]);
        } else {
            return $this->body;
        }
    }
}