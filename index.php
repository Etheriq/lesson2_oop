<?php
/**
 * Created by JetBrains PhpStorm.
 * File: index.php
 * User: Yuriy Tarnavskiy
 * Date: 18.10.13
 * Time: 12:06
 */

/**
require_once "classes/class.monitor.php";
require_once "classes/class.pc.php";
require_once "classes/class.inventory.php";
require_once "classes/class.printer.php";
*/


include "autoload.php";


$pc1 = new pc("44003010012356","Pentium 4 3 Ghz", "320 Gb", "2 Gb");
$pc2 = new pc("44003010056955", "Core2Duo E2140 2.13 Ghz", "160 Gb", "2 Gb");

$pc1->showFullInfo();
$pc2->sendToService();

$printer1 = new printer("44003010025541", "HP 1320", "Laser printer", "Q5949A");
$printer1->showFullInfo();

$mon1 = new monitor("44003010032655","Samsung 710n", "TFT", "D-SUB");
$mon1->showFullInfo();
