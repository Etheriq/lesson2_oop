<?php
/**
 * Created by JetBrains PhpStorm.
 * User: xeon
 * Date: 20.10.13
 * Time: 0:36
 * To change this template use File | Settings | File Templates.
 */

function autoload($className)
{
    $check = stripos($className,"interface");  //проверка интерфейс или класс
    if($check === false) // если в имени подключаемого класса есть сл Interface - генерим соответствующий путь
    {
        $fileName = "classes/class.".$className.".php";
    }
    else
    {
        $fileName = "classes/interface.".$className.".php";
    }

    require_once $fileName;
}

spl_autoload_register('autoload');