<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

// ----------------------------------------------------------------------------------------------------------- Accordion

$GLOBALS['TL_DCA']['tl_content']['palettes']['accordionsingle']   = '{type_legend},type,mooType;{moo_legend},mooHeadline,mooStyle,mooClasses;{text_legend},text;{image_legend},addImage;{imageTeaser_legend},addImageTeaser;{protected_legend:hide},protected;{expert_legend:hide},guests,invisible,cssID,space';
$GLOBALS['TL_DCA']['tl_content']['fields']['addImageTeaser']      = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['addImageTeaser'],
    'exclude'   => true,
    'inputType' => 'fileTree',
    'eval'      => array('fieldType'=>'radio', 'files'=>true, 'tl_class'=>'clr')
);


// ---------------------------------------------------------------------------------------------------------------- Text

/* [unused] */

$GLOBALS['TL_DCA']['tl_content']['palettes']['text'] .= ';{textColumn_legend},textColumnSettings';
$GLOBALS['TL_DCA']['tl_content']['fields']['textColumnSettings'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['textColumnSettings'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array('25%', '50%', '75%'),
    'eval'      => array('includeBlankOption'=>true)
);

/* */

