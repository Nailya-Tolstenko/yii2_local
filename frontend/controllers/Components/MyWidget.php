<?php

namespace frontend\controllers\Components;

use yii\base\Widget;

class MyWidget  extends Widget {

    public $name;

    public function init(){
        parent::init();
//        if ( $this->name === null ) $this->name = 'Гость';

        ob_start();
    }

    public function run () {
        $content = ob_get_clean();
        $content = mb_strtoupper($content, 'UTF-8');
        return $this->render ('my', compact('content'));
//        return $this->render('my', ['name' => $this->name]);
    }
}