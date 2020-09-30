<?php
/**
 * Table tl_form_field
 */

// ------------------------------------------------------------------------------------------------------------ Palettes
// ---------------------------------------------------------------------------------- Default fields

$palettes = array(
    'text',
    'password',
    'textarea',
    'select',
    'radio',
    'checkbox',
    'upload',
    'captcha'
);

foreach ($palettes as $palette) {
    $e = $GLOBALS['TL_DCA']['tl_form_field']['palettes'][$palette];

    $GLOBALS['TL_DCA']['tl_form_field']['palettes'][$palette] = str_replace(
        'label;',
        'label,customTitle;',
        $GLOBALS['TL_DCA']['tl_form_field']['palettes'][$palette]
    );
}


// ----------------------------------------------------------------------------------- Custom fields

$GLOBALS['TL_DCA']['tl_form_field']['palettes']['submit'] = str_replace(
    'slabel;',
    'slabel,customTitle;',
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['submit']
);


// -------------------------------------------------------------------------------------------------------------- Fields

$GLOBALS['TL_DCA']['tl_form_field']['fields']['customTitle'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['customTitle'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'text',
    'eval'      => array('maxlength'=>255, 'tl_class'=>'w50'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

