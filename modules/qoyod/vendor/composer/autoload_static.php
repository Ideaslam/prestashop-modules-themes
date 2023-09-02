<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ef61c9eb1880e671d6ec32d08882b8f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SecretCodes\\Module\\Qoyod\\Shared\\' => 32,
            'SecretCodes\\Module\\Qoyod\\Services\\' => 34,
            'SecretCodes\\Module\\Qoyod\\Interfaces\\' => 36,
            'SecretCodes\\Module\\Qoyod\\Exceptions\\' => 36,
            'SecretCodes\\Module\\Qoyod\\Entity\\' => 32,
            'SecretCodes\\Module\\Qoyod\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SecretCodes\\Module\\Qoyod\\Shared\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Shared',
        ),
        'SecretCodes\\Module\\Qoyod\\Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Services',
        ),
        'SecretCodes\\Module\\Qoyod\\Interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Interfaces',
        ),
        'SecretCodes\\Module\\Qoyod\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Exceptions',
        ),
        'SecretCodes\\Module\\Qoyod\\Entity\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Entity',
        ),
        'SecretCodes\\Module\\Qoyod\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'SecretCodes\\Module\\Qoyod\\Entiry\\QoyodCategory' => __DIR__ . '/../..' . '/src/Entity/QoyodCategory.php',
        'SecretCodes\\Module\\Qoyod\\Entiry\\QoyodCustomer' => __DIR__ . '/../..' . '/src/Entity/QoyodCustomer.php',
        'SecretCodes\\Module\\Qoyod\\Entiry\\QoyodInvoice' => __DIR__ . '/../..' . '/src/Entity/QoyodInvoice.php',
        'SecretCodes\\Module\\Qoyod\\Entiry\\QoyodProduct' => __DIR__ . '/../..' . '/src/Entity/QoyodProduct.php',
        'SecretCodes\\Module\\Qoyod\\Exceptions\\ApiException' => __DIR__ . '/../..' . '/src/Exceptions/ApiException.php',
        'SecretCodes\\Module\\Qoyod\\Exceptions\\CheckWalletException' => __DIR__ . '/../..' . '/src/Exceptions/CheckWalletException.php',
        'SecretCodes\\Module\\Qoyod\\Exceptions\\HttpException' => __DIR__ . '/../..' . '/src/Exceptions/HttpException.php',
        'SecretCodes\\Module\\Qoyod\\Exceptions\\PhoneNotValidException' => __DIR__ . '/../..' . '/src/Exceptions/PhoneNotValidException.php',
        'SecretCodes\\Module\\Qoyod\\Exceptions\\ServiceNotFoundException' => __DIR__ . '/../..' . '/src/Exceptions/ServiceNotFoundException.php',
        'SecretCodes\\Module\\Qoyod\\Exceptions\\UnauthorizedException' => __DIR__ . '/../..' . '/src/Exceptions/UnauthorizedException.php',
        'SecretCodes\\Module\\Qoyod\\Exceptions\\ValidationException' => __DIR__ . '/../..' . '/src/Exceptions/ValidationException.php',
        'SecretCodes\\Module\\Qoyod\\Interfaces\\FactoryInterface' => __DIR__ . '/../..' . '/src/Interface/FactoryInterface.php',
        'SecretCodes\\Module\\Qoyod\\Services\\QoyodApi' => __DIR__ . '/../..' . '/src/Service/Qoyod/QoyodApi.php',
        'SecretCodes\\Module\\Qoyod\\Services\\QoyodService' => __DIR__ . '/../..' . '/src/Service/Qoyod/QoyodService.php',
        'SecretCodes\\Module\\Qoyod\\Services\\QoyodServiceFactory' => __DIR__ . '/../..' . '/src/Service/Qoyod/QoyodServiceFactory.php',
        'SecretCodes\\Module\\Qoyod\\Shared\\Curl' => __DIR__ . '/../..' . '/src/Shared/Api/Curl.php',
        'SecretCodes\\Module\\Qoyod\\Shared\\Ihttp' => __DIR__ . '/../..' . '/src/Shared/Api/Ihttp.php',
        'SecretCodes\\Module\\Qoyod\\Shared\\MessageGenerator' => __DIR__ . '/../..' . '/src/Shared/Log/MessageGenerator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ef61c9eb1880e671d6ec32d08882b8f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ef61c9eb1880e671d6ec32d08882b8f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8ef61c9eb1880e671d6ec32d08882b8f::$classMap;

        }, null, ClassLoader::class);
    }
}
