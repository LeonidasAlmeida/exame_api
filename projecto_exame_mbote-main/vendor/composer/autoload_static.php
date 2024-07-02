<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf4571bee07756023b48f061d3df7e06
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lenidas\\Imobiliaria\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lenidas\\Imobiliaria\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf4571bee07756023b48f061d3df7e06::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf4571bee07756023b48f061d3df7e06::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbf4571bee07756023b48f061d3df7e06::$classMap;

        }, null, ClassLoader::class);
    }
}