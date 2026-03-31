<?php

/********************************************************************
 * Extension Manager/Repository config file for ext "t3up_slideshow".
 *******************************************************************/

/** @var string $_EXTKEY */
$EM_CONF[$_EXTKEY] = [
    'title'            => 'T3UP - Slideshow',
    'description'      => 'Bootstrap slideshows for Images',
    'version'          => '13.2.01',
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
            'typo3' => '13.4.0-',
            't3up' => '13.2-',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];
