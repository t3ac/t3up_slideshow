<?php
defined('TYPO3_MODE') or die();


$boot = function () {
	$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',slideshow'] = 'FILE:EXT:t3up_slideshow/Configuration/FlexForms/Slideshow.xml';
};


$boot();
unset($boot);
