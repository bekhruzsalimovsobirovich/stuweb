<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitad1ec58b2fb3ee6e130b9e81c66d8a7d
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

        spl_autoload_register(array('ComposerAutoloaderInitad1ec58b2fb3ee6e130b9e81c66d8a7d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitad1ec58b2fb3ee6e130b9e81c66d8a7d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitad1ec58b2fb3ee6e130b9e81c66d8a7d::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitad1ec58b2fb3ee6e130b9e81c66d8a7d::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequiread1ec58b2fb3ee6e130b9e81c66d8a7d($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequiread1ec58b2fb3ee6e130b9e81c66d8a7d($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}