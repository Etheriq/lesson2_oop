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
require_once "classes/class.AbstractInventory.php";
require_once "classes/class.printer.php";
*/

include "autoload.php";
 
$pc1 = new Pc();
$pc1->setInventoryNumber("44003010012356");
$pc1->setCpu("Pentium 4 3 Ghz");
$pc1->setHdd("329 Gb");
$pc1->setRam("2 Gb");

$pc2 = new Pc();
$pc2->setInventoryNumber("44003010056955");
$pc2->setCpu("Core2Duo E2140 2.13 Ghz");
$pc2->setHdd("160 Gb");
$pc2->setRam("2 Gb");

$printer1 = new Printer();
$printer1->setInventoryNumber("44003010025541");
$printer1->setModel("HP 1320");
$printer1->setType("Laser printer");
$printer1->setCartridge("Q5949A");

$mon1 = new Monitor();
$mon1->setInventoryNumber("44003010032655");
$mon1->setModel("Samsung 710n");
$mon1->setType("TFT");
$mon1->setInterf("D-SUB");

echo "<pre>".$pc1->showFullInfo()."</pre>";
echo "<pre>".$pc2->sendToService()."</pre>";
echo "<pre>".$printer1->showFullInfo()."</pre>";
echo "<pre>".$mon1->showFullInfo()."</pre>";
