<?php
/**
 * Created by JetBrains PhpStorm.
 * File: class.printer.php
 * User: Yuriy Tarnavskiy
 * Date: 18.10.13
 * Time: 14:00
 */

//require_once "class.inventory.php";
//require_once "interface.inventoryInterface.php";

class printer extends inventory implements inventoryInterface
{
    private $model;
    private $type;
    private $cartridge;

    public function __construct($inv, $model, $type, $cartridge)
    {
        $this->inv_number = $inv;
        $this->model = $model;
        $this->type = $type;
        $this->cartridge = $cartridge;
    }

    public function getInventNumber()
    {
        return $this->inv_number;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getCartridge()
    {
        return $this->cartridge;
    }

    public function setInventNumber($newInv)
    {
        $this->inv_number = $newInv;
    }

    public function setModel($newModel)
    {
        $this->model = $newModel;
    }

    public function setType($newType)
    {
        $this->type = $newType;
    }

    public function setCartridge($newCartridge)
    {
        $this->cartridge = $newCartridge;
    }


    public function sendToService()
    {
        echo "Printer with inventory number ".$this->getInventNumber()." sent to service organization\n";
    }

    public function showFullInfo()
    {
        echo "Full information about Printer model: ".$this->getModel()."<br/>
        Inventory number: ".$this->getInventNumber().";<br/>
        Type of printer: ".$this->getType().";<br/>
        Model of cartridge for current printer: ".$this->getCartridge().";<br/>
        ";
    }
}