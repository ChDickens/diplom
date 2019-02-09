<?php

namespace App;

class Cart
{
    public $qty;
    public $totalPrice;
    public $totalQty;
    public $shipmentPrice;

    public function __construct($qty, $totalPrice, $totalQty)
    {
        $this->qty = $qty;
        $this->totalPrice = $totalPrice;
        $this->totalQty = $totalQty;
    }

    public function add() {

    }

    public function delete() {

    }

    public function reduceByOne() {

    }
}
