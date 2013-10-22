<?php
/**
 * Created by JetBrains PhpStorm.
 * File: class.AbstractInventory.php
 * User: Yuriy Tarnavskiy
 * Date: 18.10.13
 * Time: 11:01
 */

abstract class AbstractInventory
{
    protected $inv_number;

    abstract public function setInventoryNumber($newInvNumber);
}