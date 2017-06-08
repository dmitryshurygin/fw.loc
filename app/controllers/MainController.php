<?php

namespace app\controllers;

use app\models\Main;

class MainController extends AppController{
    
//    public $layout = 'main';
    
    public function indexAction() {
        $model = new Main;
        $posts = $model->findAll();
        $posts2 = $model->findAll();
//        $post = $model->findOne(2);
//        $data = $model->findBySql("SELECT * FROM {$model->table} WHERE title LIKE ?", ['%я 2%']);
        $data = $model->findLike('я 2', 'title');
        debug($data);
        $title = 'PAGE TITLE';
        $this->set(compact('title', 'posts'));
    }
    
}
