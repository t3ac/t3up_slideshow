<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('t3up_slideshow', 'Configuration/TypoScript', 'T3UP - Slideshow');