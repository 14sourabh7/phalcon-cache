<?php

use Phalcon\Mvc\Model;

class Products extends Model
{
    public $product_id;
    public $name;
    public $description;
    public $tags;
    public $price;
    public $stock;

    public function getProducts()
    {
        return Products::find();
    }
}
