<?php
namespace Hautelook;

class Item
{

    public  $name;

    // price * 100 as integer for decimal precision
    public $price;

    public $quantity;

    public $lb;

    public function __construct( $name,  $price,  $quantity,  $lb)
    {
        $this->name = $name;
        $this->price = $price*100;
        $this->quantity = $quantity;
        $this->lb = $lb;

    }

    public function addQuantity( $quantity){
        $this->quantity += $quantity;

    }

} 
