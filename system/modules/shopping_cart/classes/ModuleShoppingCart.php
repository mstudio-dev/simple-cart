<?php

namespace MyVendor\ShoppingCart;

use Contao\Module;
use MyVendor\ShoppingCart\Model\ProductModel;

class ModuleShoppingCart extends Module
{
    protected $strTemplate = 'mod_shopping_cart';

    protected function compile()
    {
        $products = ProductModel::findAll();
        $this->Template->products = $products;
    }
}
