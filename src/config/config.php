<?php
require '/var/www/html/gestiondette3/vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable('/var/www/html/gestiondette3');
$dotenv->load();

// Pour lire un fichier YAML
$data = Yaml::parseFile('/var/www/html/gestiondette3/src/config/services.yaml');


define('DB_USER',$_ENV['DB_USER']);
define('DB_PASSWORD',$_ENV['DB_PASSWORD']);
define('WEBROOT','www.sidy.diop.balde.sn:8O10/gestiondette3/public/');
define('dsn','mysql:host=localhost;port=3306;dbname=Gestion_Dette_V2;charset=utf8mb4');


