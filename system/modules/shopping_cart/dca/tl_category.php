<?php

$GLOBALS['TL_DCA']['tl_category'] = array(
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
            'label' => 'Category Name',
            'inputType' => 'text',
            'eval' => array('mandatory' => true, 'maxlength' => 255),
            'sql' => "varchar(255) NOT NULL default ''"
        )
    )
);
