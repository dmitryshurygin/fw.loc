<?php

namespace vendor\core\base;

use vendor\core\Db;
/**
 * Description of Model
 *
 * @author jester
 */
abstract class Model {
    
    protected $pdo;
    protected $table;
    
    public function __construct() {
        $this->pdo = Db::instance();
        
    }
    
    public function query($sql){
        return $this->pdo->execute();
    }
    
    public function  findAll(){
        $sql = "SELECT * FROM {$this->table}";
        return $this->pdo->query($sql);
    }
    
}
