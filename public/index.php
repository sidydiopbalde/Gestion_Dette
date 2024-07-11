<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use App\App\Controller\UtilisateurController;
use App\App\Entity\UtilisateurEntity;
use App\Core\Route;
require_once __DIR__ . '/../vendor/autoload.php';

//   $controller = new UtilisateurController();
// $controller->index();   

// Include your database connection and client model

use App\App\App;

    $route = new Route();

    $route->get('Client_SuivieDette',['controller'=>'UtilisateurController','action'=>'index']);
    $route->post('Client_SuivieDette',['controller'=>'UtilisateurController','action'=>'index']);
    if(isset($_POST['nom'])){
        $route->post('Client_SuivieDette',['controller'=>'UtilisateurController','action'=>'addClient']);
    }

    if(isset($_POST['phone'])){
        $route->post('Client_SuivieDette',['controller'=>'UtilisateurController','action' =>'searchClientByTel']);
    }
    if(isset($_POST['dette'])){
        $route->post('dette',['controller'=>'DetteController','action' =>'getDette']);

    }
    if(isset($_POST['nouvelle'])){
        $route->post('nouvelle',['controller'=>'DetteController','action' =>'newDette']);

    }

    $route::separate();
// Route::get('login', 'UtilisateurController@login');
// Route::post('Client_SuivieDette','UtilisateurController@addClient');
// Route::separate();

// Route::get('logout','SecurityController@logout');
// Route::get('accueil','BoutiquierController@accueil');
// Route::post('login','UtilisateurController@index');