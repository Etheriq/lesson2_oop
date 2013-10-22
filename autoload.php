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
   $checkClassName = stripos($className,"interface");
    if ($checkClassName === false) {
        $fileName = "classes/class.".$className.".php";
    } else {
        $fileName = "classes/interface.".$className.".php";
    }

    require_once $fileName;
}

spl_autoload_register('autoload');