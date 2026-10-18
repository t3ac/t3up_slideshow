<?php

/********************************************************************
 * Extension Manager/Repository config file for ext "t3up_slideshow".
 *******************************************************************/

/** @var string $_EXTKEY */
$EM_CONF[$_EXTKEY] = [
    'title'            => 'T3UP - Slideshow',
    'description'      => 'Bootstrap slideshows for Images',
    'version'          => '14.0.01',
    'state'            => 'stable',
    'category'         => 'fe',
    'author'           => 'Michael Lang',
    'author_email'     => 'info@t3ac.de',
    'author_company'   => 'Mediadesign',
    'uploadfolder'     => false,
    'createDirs'       => '',
    'clearCacheOnLoad' => false,
    'constraints'      => [
        'depends'   => [
            'typo3' => '14.3.0-',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];
