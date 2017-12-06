<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde939cfe4a20f6d5e3d57a542a9ec00f
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        'f084d01b0a599f67676cffef638aa95b' => __DIR__ . '/..' . '/smarty/smarty/libs/bootstrap.php',
        '22d287673fb05a9ac9f86bf3b35680f2' => __DIR__ . '/..' . '/appbolaget/dd/src/dd.php',
        'c54c1e352893e3d8c94af4f1df1cd8f3' => __DIR__ . '/..' . '/appbolaget/dd/src/Dumper.php',
        'a5678475996ced6f4774ffdad364dba4' => __DIR__ . '/..' . '/appbolaget/dd/src/HtmlDumper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'DB' => __DIR__ . '/../..' . '/App/Db/DB.class.php',
        'DatabaseOperate' => __DIR__ . '/../..' . '/App/Db/DatabaseOperate.class.php',
        'Pagination' => __DIR__ . '/../..' . '/App/help/Pagination.php',
        'help' => __DIR__ . '/../..' . '/App/help/help.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitde939cfe4a20f6d5e3d57a542a9ec00f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde939cfe4a20f6d5e3d57a542a9ec00f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitde939cfe4a20f6d5e3d57a542a9ec00f::$classMap;

        }, null, ClassLoader::class);
    }
}
