<?php
/**
 * Table tl_form
 */

if (isset($GLOBALS['TL_DCA']['tl_form']['fields']['format']['reference']['efgAliasField'])) {
    // EFG module
    $GLOBALS['TL_DCA']['tl_form']['list']['label']['fields'][] = 'formattedMailRecipient';
    $GLOBALS['TL_DCA']['tl_form']['list']['label']['fields'][] = 'formattedMailTemplate';
    $GLOBALS['TL_DCA']['tl_form']['list']['label']['fields'][] = 'confirmationMailTemplate';
    $GLOBALS['TL_DCA']['tl_form']['list']['label']['fields'][] = 'formattedMailSubject';
    $GLOBALS['TL_DCA']['tl_form']['list']['label']['fields'][] = 'confirmationMailSubject';
    $GLOBALS['TL_DCA']['tl_form']['list']['label']['fields'][] = 'jumpTo';

    $GLOBALS['TL_DCA']['tl_form']['list']['label']['format']  .= '<div style="color:#b3b3b3;margin:5px 0;">
    <span style="display:inline-block;width:115px;">' . $GLOBALS['TL_LANG']['tl_form']['vs_title_mail']        . ':</span> %s <br>
    <span style="display:inline-block;width:115px;">' . $GLOBALS['TL_LANG']['tl_form']['vs_title_tplSend']     . ':</span> %s <br>
    <span style="display:inline-block;width:115px;">' . $GLOBALS['TL_LANG']['tl_form']['vs_title_tplConfirm']  . ':</span> %s <br>
    <span style="display:inline-block;width:115px;">' . $GLOBALS['TL_LANG']['tl_form']['vs_title_mailSend']    . ':</span> %s <br>
    <span style="display:inline-block;width:115px;">' . $GLOBALS['TL_LANG']['tl_form']['vs_title_mailConfirm'] . ':</span> %s <br>
    <span style="display:inline-block;width:115px;">' . $GLOBALS['TL_LANG']['tl_form']['vs_title_jumpTo']      . ':</span> %s
    </div>';
}
else {
    // Contao default
    $GLOBALS['TL_DCA']['tl_form']['list']['label']['fields'][] = 'recipient';
    $GLOBALS['TL_DCA']['tl_form']['list']['label']['fields'][] = 'subject';
    $GLOBALS['TL_DCA']['tl_form']['list']['label']['fields'][] = 'jumpTo';

    $GLOBALS['TL_DCA']['tl_form']['list']['label']['format'] .= '<div style="color:#b3b3b3;margin:5px 0;">
    <span style="display:inline-block;width:80px;">' . $GLOBALS['TL_LANG']['tl_form']['vs_title_mail']    . ':</span> %s <br>
    <span style="display:inline-block;width:80px;">' . $GLOBALS['TL_LANG']['tl_form']['vs_title_subject'] . ':</span> %s <br>
    <span style="display:inline-block;width:80px;">' . $GLOBALS['TL_LANG']['tl_form']['vs_title_jumpTo']  . ':</span> %s
    </div>';
}

