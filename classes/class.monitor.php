<?php
/**
 * Created by JetBrains PhpStorm.
 * File: class.monitor.php
 * User: Yuriy Tarnavskiy
 * Date: 18.10.13
 * Time: 11:03
 */

require_once "class.inventory.php";
require_once "interface.inventoryInterface.php";

class monitor extends inventory implements inventoryInterface
{
    private $model;
    private $type;
    private $interf;

    function __construct($model, $type, $interf, $inv_numb)
    {
        $this->inv_number = $inv_numb;
        $this->model = $model;
        $this->type = $type;
        $this->interf = $interf;
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

    public function getInterf()
    {
        return $this->interf;
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

    public function setInterf($newInterf)
    {
        $this->interf = $newInterf;
    }

    public function sendToService()
    {
        echo "Monitor with inventory number ".$this->getInventNumber()." and model ".$this->getModel()." sent to service organization";
    }

    public function showFullInfo()
    {
        echo "Full information about ".$this->getModel()." monitor:<br/>
        Inventory number: ".$this->getInventNumber().";<br/>
        Type of monitor: ".$this->getType().";<br/>
        Interface of monitor: ".$this->getInterf().";
        ";
    }


}