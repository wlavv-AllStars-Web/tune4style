<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitedb2b8a5f7ef964389bffe495b93698b
{
    public static $classMap = array (
        'Ps_Shoppingcart' => __DIR__ . '/../..' . '/ps_shoppingcart.php',
        'Ps_ShoppingcartAjaxModuleFrontController' => __DIR__ . '/../..' . '/controllers/front/ajax.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitedb2b8a5f7ef964389bffe495b93698b::$classMap;

        }, null, ClassLoader::class);
    }
}
