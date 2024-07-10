<?php

$GLOBALS['BE_MOD']['content']['shopping_cart'] = array(
    'tables' => array('tl_product', 'tl_category'),
    'icon'   => 'system/modules/shopping_cart/assets/icon.png',
);

$GLOBALS['FE_MOD']['shopping_cart'] = array(
    'shopping_cart' => 'ModuleShoppingCart',
);

$GLOBALS['TL_MODELS']['tl_product'] = 'MyVendor\ShoppingCart\Model\ProductModel';
$GLOBALS['TL_MODELS']['tl_category'] = 'MyVendor\ShoppingCart\Model\CategoryModel';

