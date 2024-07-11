<?php

namespace App\Core\Model;

 abstract class Model{

    protected string $table;
    protected $database;

    public function __construct(){
      // $this->database = $database;
    }


    public function all(){
    
      return $this->database->query("select * from $this->table", $this->getEntity());
    }

    public function find(){

    }
    public function findByPhone($telephone){
      
    }
    public function query(string $sql, string $entityName, $data = [], bool $single = false){
      if(empty($data)){
        return $this->database->query($sql, $entityName, $single);
      }else{
        return $this->database->prepare($sql, $data, $entityName, $single);
      }
      
    }

    public function delete(){

    }

    public function save($data){

    }

    public static function update(){

    }

    public function setDatabase($database){
      $this->database = $database;
    }

    public abstract function getEntity();
 }