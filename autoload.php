<?php
/**
 * Created by JetBrains PhpStorm.
 * File: autoload.php
 * User: Yuriy Tarnavskiy
 * Date: 20.10.13
 * Time: 0:36
 * To change this template use File | Settings | File Templates.
 */

function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strripos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace).DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className).'.php';

    require $fileName;
}
spl_autoload_register('autoload');
