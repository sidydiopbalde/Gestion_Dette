<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit73a57cb7772c33c77b4c453e9c82774f
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Yaml\\' => 23,
        ),
        'P' => 
        array (
            'PhpOption\\' => 10,
        ),
        'G' => 
        array (
            'GrahamCampbell\\ResultType\\' => 26,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
        'A' => 
        array (
            'App\\Core\\Validator\\' => 19,
            'App\\Core\\RECU\\' => 14,
            'App\\Core\\Model\\' => 15,
            'App\\Core\\Entity\\' => 16,
            'App\\Core\\Database\\' => 18,
            'App\\Core\\' => 9,
            'App\\App\\Model\\' => 14,
            'App\\App\\Entity\\' => 15,
            'App\\App\\Controller\\' => 19,
            'App\\App\\' => 8,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'PhpOption\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption',
        ),
        'GrahamCampbell\\ResultType\\' => 
        array (
            0 => __DIR__ . '/..' . '/graham-campbell/result-type/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
        'App\\Core\\Validator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/core/Validator',
        ),
        'App\\Core\\RECU\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/core/Recu',
        ),
        'App\\Core\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/core/model',
        ),
        'App\\Core\\Entity\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/core/entity',
        ),
        'App\\Core\\Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/core/database',
        ),
        'App\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/core',
        ),
        'App\\App\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/app/model',
        ),
        'App\\App\\Entity\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/app/entity',
        ),
        'App\\App\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/app/controller',
        ),
        'App\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/app',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'FPDF' => __DIR__ . '/..' . '/setasign/fpdf/fpdf.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit73a57cb7772c33c77b4c453e9c82774f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit73a57cb7772c33c77b4c453e9c82774f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit73a57cb7772c33c77b4c453e9c82774f::$classMap;

        }, null, ClassLoader::class);
    }
}
