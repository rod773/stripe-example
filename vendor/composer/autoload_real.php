<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitab9d0760f1ac533c5c8f1cd785bced1f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitab9d0760f1ac533c5c8f1cd785bced1f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitab9d0760f1ac533c5c8f1cd785bced1f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitab9d0760f1ac533c5c8f1cd785bced1f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
