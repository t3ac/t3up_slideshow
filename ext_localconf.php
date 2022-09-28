<?php

/*
 * This file is part of the composer package t3ac/t3up-container.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') || die('Access denied.');

(function () {

    // Add PageTSConfig
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3up_slideshow/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.typoscript">');
    
    // Register icons
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    
    $iconRegistry->registerIcon(
        't3up_slideshow',
        \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
        ['source' => 'EXT:t3up_slideshow/Resources/Public/Icons/t3upslideshow.png']
    );
})();
