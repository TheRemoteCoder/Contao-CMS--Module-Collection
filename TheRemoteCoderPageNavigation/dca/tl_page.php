<?php

// ------------------------------------------------------------------------------------------------------------ Palettes

foreach (array('regular', 'forward', 'redirect') as $palette) {
    $GLOBALS['TL_DCA']['tl_page']['palettes'][$palette] = str_replace(
        'guests;',
        'guests,TheRemoteCoderPageNavigation_header,TheRemoteCoderPageNavigation_aside,TheRemoteCoderPageNavigation_footer;',
        $GLOBALS['TL_DCA']['tl_page']['palettes'][$palette]
    );
}


// -------------------------------------------------------------------------------------------------------------- Fields

$GLOBALS['TL_DCA']['tl_page']['fields']['TheRemoteCoderPageNavigation_header'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['TheRemoteCoderPageNavigation_header'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => array('tl_class'=>'w50'),
    'sql'       => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_page']['fields']['TheRemoteCoderPageNavigation_aside'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['TheRemoteCoderPageNavigation_aside'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => array('tl_class'=>'w50'),
    'sql'       => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_page']['fields']['TheRemoteCoderPageNavigation_footer'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['TheRemoteCoderPageNavigation_footer'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => array('tl_class'=>'w50'),
    'sql'       => "char(1) NOT NULL default ''"
);

