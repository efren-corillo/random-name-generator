<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit049ef96f75049efe61b43b80d1328bc2
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Doublybear\\RandomNameGenerator\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Doublybear\\RandomNameGenerator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit049ef96f75049efe61b43b80d1328bc2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit049ef96f75049efe61b43b80d1328bc2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit049ef96f75049efe61b43b80d1328bc2::$classMap;

        }, null, ClassLoader::class);
    }
}
