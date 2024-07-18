<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use App\Core\Route;
require_once __DIR__ . '/../vendor/autoload.php';
require_once '/var/www/html/gestiondette3/src/config/config.php';   


use App\App\App;

    $route = new Route();

    $route->get('Client_SuivieDette',['controller'=>'UtilisateurController','action'=>'index']);
    $route->post('Client_SuivieDette',['controller'=>'UtilisateurController','action'=>'index']);
    $route->get('payer',['controller'=>'PaiementController','action' =>'savePaiement']);
    if(isset($_POST['nom'])){
        $route->post('Client_SuivieDette',['controller'=>'UtilisateurController','action'=>'addClient']);
    }
    if(isset($_POST['ref'])){
        $route->post('nouvelle',['controller'=>'DetteController','action' =>'searchArticleByRef']);
    }
    
    if(isset($_POST['quantite'])){
        $route->post('nouvelle',['controller'=>'DetteController','action' =>'searchArticleByRef']);
    }
    if(isset($_POST['nouvelle'])){
        $route->post('nouvelle',['controller'=>'DetteController','action' =>'newDebt']);

    }
    $route->get('nouvelle',['controller'=>'DetteController','action' =>'saveDebt']);
    if(isset($_POST['phone'])){
        $route->post('Client_SuivieDette',['controller'=>'UtilisateurController','action' =>'searchClientByTel']);
    }
    if(isset($_POST['dette'])){
        $route->post('dette',['controller'=>'DetteController','action' =>'getDette1']);

    }
    if(isset($_POST['filter'])){
        $route->post('dette',['controller'=>'DetteController','action' =>'getDette1']);

    }
    if(isset($_POST['product'])){
        $route->post('product',['controller'=>'DetteController','action' =>'productList']);
        
    }
    $route->get('product',['controller'=>'DetteController','action' =>'productList']);
    if(isset($_POST['list_paiement'])){
        $route->post('list_paiement',['controller'=>'DetteController','action' =>'ViewPaiement']);

    }
    if(isset($_POST['payer'])){
        $route->post('payer',['controller'=>'PaiementController','action' =>'payeDebt']);

    }
    if(isset($_POST['montant_paye'])){
        $route->post('payer',['controller'=>'PaiementController','action' =>'savePaiement']);

    }
    // $route::separate();
    use Symfony\Component\Yaml\Yaml;
    $data = Yaml::parseFile('/var/www/html/gestiondette3/src/config/services.yaml');
    var_dump(new $data['MysqlDatabase']);

// Route::get('login', 'UtilisateurController@login');
// Route::post('Client_SuivieDette','UtilisateurController@addClient');
// Route::separate();

// Route::get('logout','SecurityController@logout');
// Route::get('accueil','BoutiquierController@accueil');
// Route::post('login','UtilisateurController@index');