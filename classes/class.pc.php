<?php
/**
 * Created by JetBrains PhpStorm.
 * File: class.pc.php
 * User: Yuriy Tarnavskiy
 * Date: 18.10.13
 * Time: 11:48
 */

require_once "class.inventory.php";
require_once "interface.inventoryInterface.php";

class pc extends inventory implements inventoryInterface
{
    private $cpu;
    private $hdd;
    private $ram;

    public function __construct($inv, $cpu, $hdd, $ram)
    {
        $this->inv_number = $inv;
        $this->cpu = $cpu;
        $this->hdd = $hdd;
        $this->ram = $ram;
    }

    public function getInventNumber()
    {
        return $this->inv_number;
    }

    public function getCpu()
    {
        return $this->cpu;
    }

    public function getHdd()
    {
        return $this->hdd;
    }

    public function getRam()
    {
        return $this->ram;
    }

    public function setHdd($newHdd)
    {
        $this->hdd = $newHdd;
    }

    public function setRam($newRam)
    {
        $this->ram = $newRam;
    }


    public function sendToService()
    {
        echo "PC with inventory number ".$this->getInventNumber()." sent to service organization\n";
    }

    public function showFullInfo()
    {
        echo "Full information about PC:<br/>
        Inventory number: ".$this->getInventNumber().";<br/>
        Type of main processor: ".$this->getCpu().";<br/>
        Volume of HDD: ".$this->getHdd().";<br/>
        Volume of RAM: ".$this->getRam().";<br/>
        ";
    }
}