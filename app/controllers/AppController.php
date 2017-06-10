<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use app\models\Main;

/**
 * Description of App
 *
 * @author jester
 */
class AppController extends \vendor\core\base\Controller{
    
    public $menu;
    
    public function __construct($route) {
        parent::__construct($route);
        new \app\models\Main;
        $this->menu = \R::findAll('category');
    }
}
