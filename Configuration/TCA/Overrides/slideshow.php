<?php

defined('TYPO3_MODE') || defined('TYPO3') || die('Access denied.');

/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['slideshow_content'] = 't3upslideshow_content';


call_user_func(function () {
    // Add the CType "slideshow"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        ['Slideshow', 't3upslideshow_content', 't3upslideshow_content']
    );

    // Define a reduced headers palette
    $GLOBALS['TCA']['tt_content']['palettes']['t3upslideshow_content'] = [
        'label'    => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers',
        'showitem' => 'header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
                        --linebreak--,
                        header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
                        header_position;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position_formlabel',
    ];

    // Define what fields to display
    $GLOBALS['TCA']['tt_content']['types']['t3upslideshow_content'] = [
        'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general, 
                --palette--;;general, --palette--;;headers_slideshow,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,
                image,image_zoom,lightboxstyle,
		    --div--;LLL:EXT:t3up_slideshow/Resources/Private/Language/locallang_backend.xlf:value,
		        pi_flexform, 
		    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;;frames,
                --palette--;LLL:EXT:t3up/Resources/Private/Language/locallang_backend.xlf:padding_class;padding_fields,
                --palette--;;appearanceLinks,
		    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
		        --palette--;;language,
		    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
		        --palette--;;hidden,
		        --palette--;;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,		      
        ',
        'columnsOverrides' => [
            'image' => [
                'config' => [
                    'maxitems' => '99',
                    'minitems' => '1'
                ]
            ]
        ]
    ];

    // Add a flexform to the slider CType
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        '*',
        'FILE:EXT:t3up_slideshow/Configuration/FlexForms/Slideshow.xml',
        't3upslideshow_content'
    );

});
