<?php

defined('TYPO3_MODE') || defined('TYPO3') || die('Access denied.');

/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['slideshow_content'] = 't3upslideshow_content';


call_user_func(function () {
    
    $customLanguageFilePrefix   = 'LLL:EXT:t3up_slideshow/Resources/Private/Language/locallang_backend.xlf:';
    $frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';
    
    
    // Add the CType "t3upslideshow_content"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        ['Slideshow', 't3upslideshow_content', 't3upslideshow_content']
        );

        
    // Define what fields to display
    $GLOBALS['TCA']['tt_content']['types']['t3upslideshow_content'] = [
        'showitem' => '
        --palette--;
            ' . $frontendLanguageFilePrefix . 'palette.general;general,
             header,
             assets,
	    --div--;LLL:EXT:t3up_slideshow/Resources/Private/Language/locallang_backend.xlf:slideshow.flexvalues, pi_flexform,
	    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
	    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,space_after_class,
	    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,
	    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
	    --palette--;;hidden,
	    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,',
        'columnsOverrides' => [
            'assets' => [
                'config' => [
                    'maxitems' => '99',
                    'minitems' => '1'
                ]
            ],
        ]
    ];
    

    // Add a flexform to the slider CType
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        '*',
        'FILE:EXT:t3up_slideshow/Configuration/FlexForms/Slideshow.xml',
        't3upslideshow_content'
    );

});
