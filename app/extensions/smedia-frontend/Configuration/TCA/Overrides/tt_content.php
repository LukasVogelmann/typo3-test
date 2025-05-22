<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItemGroup(
    'tt_content', // table
    'CType', // typeField
    'contentblocks', // group
    'Content Blocks', // label
    'before:default', // position
);

$containerColumn = [
    'fullsize' => [
        'exclude' => true,
        'label' => 'Container Fullsize',
        'config' => [
            'type' => 'check',
            'items' => [
                [
                    'label' => 'fullsize',
                ],
            ],
        ],
    ],
    'gap' => [
        'label' => 'Space between columns in px',
        'config' => [
            'type' => 'number',
            'default' => 0,
            'size' => 10,
            'range' => [
                'lower' => 0,
                'upper' => 200
            ],
            'slider' => [
                'step' => 5,
                'width' => 200,
            ],
        ],
    ],
    'two_col_distribution' => [
        'label' => 'Column distribution',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'label' => '50% / 50%',
                    'value' => 0,
                ],
                [
                    'label' => '33% / 66%',
                    'value' => 1,
                ],
                [
                    'label' => '66% / 33%',
                    'value' => 2,
                ],
                [
                    'label' => '25% / 75%',
                    'value' => 3,
                ],
                [
                    'label' => '75% / 25%',
                    'value' => 4,
                ],
            ],
        ],
    ],
    'bg_color' => [
        'label' => 'Background color',
        'config' => [
            'type' => 'color',
            'placeholder' => '#ffffff',
            'default' => '#ffffff',
            'valuePicker' => [
                'items' => [
                    ['Base Blue', '#001b2f'],
                    ['Gold', '#c1b175'],
                ],
            ],
        ],
    ],
];

ExtensionManagementUtility::addTCAcolumns('tt_content', $containerColumn);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            '1-col-container', // CType
            '1 Column Container', // label
            '', // description
            [
                [
                    ['name' => 'center', 'colPos' => 201],
                ]
            ] // grid configuration
        )
    )
    // set an optional icon configuration
    ->setIcon('EXT:smedia_frontend/Resources/Public/Icons/1col.svg')
);
$GLOBALS['TCA']['tt_content']['types']['1-col-container']['showitem'] .= 'fullsize, bg_color';


\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            '2-col-container', // CType
            '2 Column Container', // label
            '', // description
            [
                [
                    ['name' => 'left side', 'colPos' => 211],
                    ['name' => 'right side', 'colPos' => 212]
                ]
            ] // grid configuration
        )
    )
    // set an optional icon configuration
    ->setIcon('EXT:smedia_frontend/Resources/Public/Icons/2col.svg')
);
$GLOBALS['TCA']['tt_content']['types']['2-col-container']['showitem'] .= 'fullsize, two_col_distribution, gap, bg_color';

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            '3-col-container', // CType
            '3 Column Container', // label
            '', // description
            [
                [
                    ['name' => 'left side', 'colPos' => 221],
                    ['name' => 'center', 'colPos' => 222],
                    ['name' => 'right side', 'colPos' => 223]
                ]
            ] // grid configuration
        )
    )
    // set an optional icon configuration
    ->setIcon('EXT:smedia_frontend/Resources/Public/Icons/3col.svg')
);
$GLOBALS['TCA']['tt_content']['types']['3-col-container']['showitem'] .= 'fullsize, gap, bg_color';
