<?php
defined('TYPO3_MODE') or die();


$boot = function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('t3up_slideshow', 'Configuration/TypoScript', 'T3UP - Slideshow');
	$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',slideshow'] = 'FILE:EXT:t3up_slideshow/Configuration/FlexForms/Slideshow.xml';
};


$boot();
unset($boot);
