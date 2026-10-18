<?php

defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

$frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';

ExtensionManagementUtility::addRecordType(
    [
        'label' => 'LLL:EXT:t3up_slideshow/Resources/Private/Language/locallang_db.xlf:slideshow.title',
        'value' => 't3upslideshow_content',
        'icon' => 't3upslideshow',
        'group' => 'default',
        'description' => 'LLL:EXT:t3up_slideshow/Resources/Private/Language/locallang_db.xlf:slideshow.description',
    ],
    '   --palette--;
        ' . $frontendLanguageFilePrefix . 'palette.general;general,
        header,header_link,subheader,
        assets,
        --div--;LLL:EXT:t3up_slideshow/Resources/Private/Language/locallang_db.xlf:slideshow.flexvalues, pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,space_after_class,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
        --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
    ',
    [
        'columnsOverrides' => [
            'assets' => [
                'config' => [
                    'minitems' => 1,
                    'maxitems' => 99,
                ],
            ],
        ],
    ],
);
// Add a flexform to the slider CType
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:t3up_slideshow/Configuration/FlexForms/Slideshow.xml',
    't3upslideshow_content'
);
