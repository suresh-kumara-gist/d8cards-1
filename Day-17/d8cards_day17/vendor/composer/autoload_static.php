<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3620856eb1c3bfcf78762fbbc22777d7
{
    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/..' . '/guhelski/forecast-php/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr0 = ComposerStaticInit3620856eb1c3bfcf78762fbbc22777d7::$fallbackDirsPsr0;

        }, null, ClassLoader::class);
    }
}
