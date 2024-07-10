<?php

$GLOBALS['TL_DCA']['tl_product'] = array(
    'config' => array(
        'dataContainer' => 'Table',
        'sql' => array(
            'keys' => array(
                'id' => 'primary'
            )
        )
    ),
    'fields' => array(
        'id' => array(
            'sql' => "int(10) unsigned NOT NULL auto_increment"
        ),
        'name' => array(
            'label' => 'Product Name',
            'inputType' => 'text',
            'eval' => array('mandatory' => true, 'maxlength' => 255),
            'sql' => "varchar(255) NOT NULL default ''"
        ),
        'price' => array(
            'label' => 'Price',
            'inputType' => 'text',
            'eval' => array('rgxp' => 'digit', 'mandatory' => true),
            'sql' => "decimal(10,2) NOT NULL default '0.00'"
        ),
        'category' => array(
            'label' => 'Category',
            'inputType' => 'select',
            'foreignKey' => 'tl_category.name',
            'eval' => array('includeBlankOption' => true),
            'sql' => "int(10) unsigned NOT NULL default '0'"
        ),
    )
);

