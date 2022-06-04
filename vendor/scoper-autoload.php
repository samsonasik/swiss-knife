<?php

// scoper-autoload.php @generated by PhpScoper

$loader = require_once __DIR__.'/autoload.php';

// Aliases for the whitelisted classes. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#class-whitelisting
if (!class_exists('ComposerAutoloaderInit0921209a1a5ac7f4414c083d5b06a29c', false) && !interface_exists('ComposerAutoloaderInit0921209a1a5ac7f4414c083d5b06a29c', false) && !trait_exists('ComposerAutoloaderInit0921209a1a5ac7f4414c083d5b06a29c', false)) {
    spl_autoload_call('EasyCI20220604\ComposerAutoloaderInit0921209a1a5ac7f4414c083d5b06a29c');
}
if (!class_exists('Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator', false) && !interface_exists('Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator', false) && !trait_exists('Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator', false)) {
    spl_autoload_call('EasyCI20220604\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator');
}
if (!class_exists('ReturnTypeWillChange', false) && !interface_exists('ReturnTypeWillChange', false) && !trait_exists('ReturnTypeWillChange', false)) {
    spl_autoload_call('EasyCI20220604\ReturnTypeWillChange');
}

// Functions whitelisting. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#functions-whitelisting
if (!function_exists('composerRequire0921209a1a5ac7f4414c083d5b06a29c')) {
    function composerRequire0921209a1a5ac7f4414c083d5b06a29c() {
        return \EasyCI20220604\composerRequire0921209a1a5ac7f4414c083d5b06a29c(...func_get_args());
    }
}
if (!function_exists('scanPath')) {
    function scanPath() {
        return \EasyCI20220604\scanPath(...func_get_args());
    }
}
if (!function_exists('lintFile')) {
    function lintFile() {
        return \EasyCI20220604\lintFile(...func_get_args());
    }
}
if (!function_exists('array_is_list')) {
    function array_is_list() {
        return \EasyCI20220604\array_is_list(...func_get_args());
    }
}
if (!function_exists('parseArgs')) {
    function parseArgs() {
        return \EasyCI20220604\parseArgs(...func_get_args());
    }
}
if (!function_exists('showHelp')) {
    function showHelp() {
        return \EasyCI20220604\showHelp(...func_get_args());
    }
}
if (!function_exists('formatErrorMessage')) {
    function formatErrorMessage() {
        return \EasyCI20220604\formatErrorMessage(...func_get_args());
    }
}
if (!function_exists('preprocessGrammar')) {
    function preprocessGrammar() {
        return \EasyCI20220604\preprocessGrammar(...func_get_args());
    }
}
if (!function_exists('resolveNodes')) {
    function resolveNodes() {
        return \EasyCI20220604\resolveNodes(...func_get_args());
    }
}
if (!function_exists('resolveMacros')) {
    function resolveMacros() {
        return \EasyCI20220604\resolveMacros(...func_get_args());
    }
}
if (!function_exists('resolveStackAccess')) {
    function resolveStackAccess() {
        return \EasyCI20220604\resolveStackAccess(...func_get_args());
    }
}
if (!function_exists('magicSplit')) {
    function magicSplit() {
        return \EasyCI20220604\magicSplit(...func_get_args());
    }
}
if (!function_exists('assertArgs')) {
    function assertArgs() {
        return \EasyCI20220604\assertArgs(...func_get_args());
    }
}
if (!function_exists('removeTrailingWhitespace')) {
    function removeTrailingWhitespace() {
        return \EasyCI20220604\removeTrailingWhitespace(...func_get_args());
    }
}
if (!function_exists('regex')) {
    function regex() {
        return \EasyCI20220604\regex(...func_get_args());
    }
}
if (!function_exists('execCmd')) {
    function execCmd() {
        return \EasyCI20220604\execCmd(...func_get_args());
    }
}
if (!function_exists('ensureDirExists')) {
    function ensureDirExists() {
        return \EasyCI20220604\ensureDirExists(...func_get_args());
    }
}
if (!function_exists('setproctitle')) {
    function setproctitle() {
        return \EasyCI20220604\setproctitle(...func_get_args());
    }
}
if (!function_exists('enum_exists')) {
    function enum_exists() {
        return \EasyCI20220604\enum_exists(...func_get_args());
    }
}

return $loader;
