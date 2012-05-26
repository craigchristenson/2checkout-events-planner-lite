<?php

global $epl_fields;

$epl_fields['epl_general_options'] =
        array(
            /* 'epl_sort_event_list_by' => array(
              'input_type' => 'select',
              'input_name' => 'epl_sort_event_list_by',
              'label' => epl__('Sort Events By'),
              'description' => 'If yes is selected, will be displayed',
              'options' => array( 10 => epl__( 'Date Published' ), 20 => epl__( 'Title' ), 30 => epl__( 'Start Date' ), 40 => epl__( 'Registration Date' ) ),
              'default_value' => 10 ), */
            'epl_currency_code' => array(
                'input_type' => 'select',
                'input_name' => 'epl_currency_code',
                'label' => 'Currency Code',
                'description' => 'This will be used in payment gateways. ',
                'options' => array( 'AUD' => 'AUD','CAD' => 'CAD', 'EUR' => 'EUR', 'GBP' => 'GBP', 'USD' => 'USD' )
            ),
            'epl_currency_symbol' => array(
                'input_type' => 'text',
                'input_name' => 'epl_currency_symbol',
                'label' => 'Currency Symbol',
                'description' => 'This will appear next to all the currency figures on the website.  Ex. $, USD, €... ',
                'class' => 'epl_w50' ),
            'epl_currency_display_format' => array(
                'input_type' => 'select',
                'input_name' => 'epl_currency_display_format',
                'options' => array( 1 => '1,234.56', 2 => '1,234', 3 => '1234', 4 => '1234.56' ),
                'default_value' => 1,
                'label' => 'Currency display format',
                'description' => 'This determines how your currency is displayed.  Ex. 1,234.56 or 1,200 or 1200.',
                'class' => '' ),
);

$epl_fields['epl_registration_options'] =
        array(
            'epl_regis_id_length' => array(
                'input_type' => 'select',
                'input_name' => 'epl_regis_id_length',
                'label' => epl__( 'Registration ID length?' ),
                'description' => epl__( 'This will be an alphanumeric string.' ),
                'options' => epl_make_array( 10, 40 ),
                'default_value' => 10 ),

);
?>
