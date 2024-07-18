<?php
namespace App\Core;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\Yaml\Yaml;

class Container {
    private $container;

    public function __construct() {
        $this->container = new ContainerBuilder();

        // Charger la configuration des services depuis le fichier YAML
        $config = Yaml::parseFile('/var/www/html/gestiondette3/src/config/services.yaml');

        foreach ($config['services'] as $id => $service) {
            $definition = $this->container->register($id, $service['class']);
            
            if (isset($service['arguments'])) {
                foreach ($service['arguments'] as $arg) {
                    if (strpos($arg, '@') === 0) {
                        $definition->addArgument(new Reference(substr($arg, 1)));
                    } else {
                        $definition->addArgument($arg);
                    }
                }
            }
        }
    }

    public function get($id) {
        return $this->container->get($id);
    }
}
