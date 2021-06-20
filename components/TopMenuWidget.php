<?php
namespace app\components;
use yii\base\Widget;
class TopMenuWidget extends Widget{
    public $tpl;
    public $ul_class;
    public $data;
    public $tree;
    public $menuHtml;

    public function init(){
        parent::init();
        if($this->tpl === null){
            $this->tpl = 'menu';
        }
        if($this->ul_class === null){
            $this->ul_class = 'menu';
        }
        $this->tpl .= '.php';
    }
        public function run(){
           return $this->tpl; 
     
       }
    
    }

