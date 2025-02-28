<?php

defined('TYPO3') or die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(static function () {
    

    // Add PageTSConfig
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3up_slideshow/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.typoscript">');
    
    ExtensionManagementUtility::addPageTSConfig("@import 'EXT:t3up_slideshow/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.typoscript'");
    
    // Register icons
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    
    $iconRegistry->registerIcon(
        't3upslideshow_content',
        \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
        ['source' => 'EXT:t3up_slideshow/Resources/Public/Icons/t3upslideshow.svg']
    );
    
    // Add backend preview hook
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['t3upslideshow_content'] =
    T3ac\T3upSlideshow\Hooks\T3upSlideshowPreviewRenderer::class;
    
});
    