<?php

require 'rb.php';
$db = require '../config/config_db.php';
R::setup($db['dsn'], $db['user'], $db['pass'], $options);
//var_dump(R::testConnection());

//Create
//$cat = R::dispense('category');
//$cat->title = 'Категория 2 sfgsdfgsdfg sdf gsdfgsdfg sdfg sdf gsdf gsdfgsdfg sdfg sdfg sdf gsdfg sdfgsdfg sdfg sdfgs dfg sdfg sdfgsdfg sdfgsdf gsdfg sdfg sdfg sdfg sdfg sdfg sdfg sdfg sdfg sdf gsdf gsdf gsdf gsdf gsdf gsdf gsdf gsdf gsdf gsdf gsdf gsdfg dfg sdfg sdf gs';
//$id = R::store($cat);
//var_dump($id);

//$post = R::dispense( 'post' );
//$post->title = 'My holiday';
//$id = R::store( $post );

//Read
//$cat = R::load('category', 2);
//echo $cat->title; // $cat['title'];

//Update
//$cat = R::load('category', 3);
//echo $cat['title'];
//$cat->title = 'Категория 3';
//R::store($cat);
//echo $cat['title'];

//Delete
//$cat = R::load('category', 3);
//R::trash($cat);
R::wipe('category');

