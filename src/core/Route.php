<?php
// namespace App\Core;

// use App\App\App;

// class Route {
//     public static $routes = [];

//     public static function get($uri, $controllerAction) {
//         self::$routes['GET'][$uri] = $controllerAction;
//     }

//     public static function post($uri, $controllerAction) {
//         self::$routes['POST'][$uri] = $controllerAction;
//     }

//     public static function separate() {
//         $method = $_SERVER['REQUEST_METHOD'];
//         $uri = trim($_SERVER['REQUEST_URI'], '/');
        
//         if (isset(self::$routes[$method][$uri])) {
//             list($controller, $action) = explode('@', self::$routes[$method][$uri]);
//             $controller = "App\\App\\Controller\\{$controller}";
//             $controller = new $controller();
//             $controller->$action();
//         } else {
//             echo 'page 404';
//         }
//     }
// }

namespace App\Core;

use App\App\App;

class Route {
    public static $routes = [];

    public static function get($uri, $controllerAction) {
        self::$routes['GET'][$uri] = $controllerAction;
    }

    public static function post($uri, $controllerAction) {
        self::$routes['POST'][$uri] = $controllerAction;
    }

    public static function separate() {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        
     
        if (isset(self::$routes[$method][$uri])) {
            $route = self::$routes[$method][$uri];
            
            if (is_array($route) && isset($route['controller']) && isset($route['action'])) {
                $controllerClass = "App\\App\\Controller\\{$route['controller']}";
                $action = $route['action'];
                if (class_exists($controllerClass)) {
                    $controller = new $controllerClass();
                    
                    if (method_exists($controller, $action)) {
                        $controller->$action();
                    } else {
                        echo "L'action '{$action}' n'existe pas dans le contrôleur '{$controllerClass}'.";
                    }
                } else {
                    echo "Le contrôleur '{$controllerClass}' n'existe pas.";
                }
            } else {
                echo 'Format de route invalide.';
            }
        } else {
            echo 'page 404';
        }
    }
}
