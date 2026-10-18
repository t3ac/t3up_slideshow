<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;
use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;


return [
    't3upslideshow' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:t3up_slideshow/Resources/Public/Icons/t3upslideshow.svg',
    ],
];