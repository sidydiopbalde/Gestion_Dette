<?php

namespace App\App;

require_once '/var/www/html/gestiondette3/src/config/config.php';
var_dump($data);
use App\Core\Database\MysqlDatabase;


class App{
    private static $instance;
    private $database;
    
    public function __construct(){

    }

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getDatabase(){
        if ($this->database === null) {
            
            $this->database =new MysqlDatabase(dsn,DB_USER,DB_PASSWORD);
        }
        return $this->database;
    }

    public function getModel($model)
    {
        $modelClass = "App\\App\\Model\\" . ucfirst($model) . "Model";
        $newModel = new $modelClass();
        $newModel->setDatabase($this->getDatabase());
        
        return $newModel;
    }

    public function notFound(){

    }

    public function forbidden(){

    }
}