<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit49399ff125922d09c51d556ea8eef03e
{
    public static $files = array (
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 
            array (
                0 => __DIR__ . '/..' . '/psr/log',
            ),
        ),
        'G' => 
        array (
            'GO' => 
            array (
                0 => __DIR__ . '/..' . '/peppeocchi/php-cron-scheduler/src',
            ),
        ),
        'C' => 
        array (
            'Cron' => 
            array (
                0 => __DIR__ . '/..' . '/mtdowling/cron-expression/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit49399ff125922d09c51d556ea8eef03e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
