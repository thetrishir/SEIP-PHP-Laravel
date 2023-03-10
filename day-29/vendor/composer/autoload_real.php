<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit776087e8e7ffeefd8892b5e4e0ce346a
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

        spl_autoload_register(array('ComposerAutoloaderInit776087e8e7ffeefd8892b5e4e0ce346a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit776087e8e7ffeefd8892b5e4e0ce346a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit776087e8e7ffeefd8892b5e4e0ce346a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
