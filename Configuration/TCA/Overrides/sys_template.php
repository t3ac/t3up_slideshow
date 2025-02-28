<?php

defined('TYPO3_MODE') || defined('TYPO3') || die('Access denied.');

call_user_func(
    function ($extKey) {
        /**
         * Embed static TypoScript template(s)
         */
        TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            't3up_slideshow',
            'Configuration/TypoScript/',
            'T3UP - Slideshow'
            );
    },
    't3upslideshow'
    );
