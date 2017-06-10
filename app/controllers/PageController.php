<?php

namespace app\controllers;


class PageController extends AppController{
    
    public function viewAction(){
//        debug($this->route);
        $menu = $this->menu;
        $title = 'PAGE TITLE';
        $this->set(compact('title', 'posts', 'menu'));
    }
    
}
