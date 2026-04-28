<?php

defined('TYPO3') or die();

(function (): void {
    $ll = 'LLL:EXT:merkur_sitepackage/Resources/Private/Language/locallang_tca.xlf:';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', [

        // ── Hero fields ───────────────────────────────────────────────────────

        'tx_merkursitepackage_hero_headline' => [
            'label'       => $ll . 'pages.hero_headline',
            'description' => $ll . 'pages.hero_headline.description',
            'config'      => [
                'type'        => 'input',
                'size'        => 50,
                'max'         => 255,
                'eval'        => 'trim',
                'placeholder' => $ll . 'pages.hero_headline.placeholder',
            ],
        ],

        'tx_merkursitepackage_hero_subheadline' => [
            'label'       => $ll . 'pages.hero_subheadline',
            'description' => $ll . 'pages.hero_subheadline.description',
            'config'      => [
                'type'        => 'text',
                'cols'        => 50,
                'rows'        => 3,
                'eval'        => 'trim',
                'placeholder' => $ll . 'pages.hero_subheadline.placeholder',
            ],
        ],

        'tx_merkursitepackage_hero_button_text' => [
            'label'       => $ll . 'pages.hero_button_text',
            'description' => $ll . 'pages.hero_button_text.description',
            'config'      => [
                'type'        => 'input',
                'size'        => 30,
                'max'         => 100,
                'eval'        => 'trim',
                'placeholder' => $ll . 'pages.hero_button_text.placeholder',
            ],
        ],

        'tx_merkursitepackage_hero_button_link' => [
            'label'       => $ll . 'pages.hero_button_link',
            'description' => $ll . 'pages.hero_button_link.description',
            'config'      => [
                'type'         => 'link',
                'allowedTypes' => ['page', 'url', 'file', 'folder', 'email', 'telephone'],
                'appearance'   => [
                    'browserTitle' => $ll . 'pages.hero_button_link.browserTitle',
                ],
            ],
        ],

        'tx_merkursitepackage_hero_bg_image' => [
            'label'       => $ll . 'pages.hero_bg_image',
            'description' => $ll . 'pages.hero_bg_image.description',
            'config'      => [
                'type'     => 'file',
                'allowed'  => 'common-image-types',
                'maxitems' => 1,
                'appearance' => [
                    'createNewRelationLinkTitle' => $ll . 'pages.hero_bg_image.addImage',
                    'collapseAll'               => true,
                    'useSortable'               => false,
                    'fileUploadAllowed'         => true,
                ],
                'overrideChildTca' => [
                    'types' => [
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => 'crop, --palette--;;filePalette',
                        ],
                    ],
                ],
            ],
        ],

        // ── Angebot fields ────────────────────────────────────────────────────

        'tx_merkursitepackage_angebot_title' => [
            'label'       => $ll . 'pages.angebot_title',
            'description' => $ll . 'pages.angebot_title.description',
            'config'      => [
                'type'        => 'input',
                'size'        => 50,
                'max'         => 255,
                'eval'        => 'trim',
                'placeholder' => $ll . 'pages.angebot_title.placeholder',
            ],
        ],

        'tx_merkursitepackage_angebot_description' => [
            'label'       => $ll . 'pages.angebot_description',
            'description' => $ll . 'pages.angebot_description.description',
            'config'      => [
                'type'        => 'text',
                'cols'        => 50,
                'rows'        => 3,
                'eval'        => 'trim',
                'placeholder' => $ll . 'pages.angebot_description.placeholder',
            ],
        ],

        'tx_merkursitepackage_angebot_card1_title' => [
            'label'       => $ll . 'pages.angebot_card1_title',
            'config'      => [
                'type'        => 'input',
                'size'        => 50,
                'max'         => 255,
                'eval'        => 'trim',
                'placeholder' => $ll . 'pages.angebot_card1_title.placeholder',
            ],
        ],

        'tx_merkursitepackage_angebot_card1_text' => [
            'label'       => $ll . 'pages.angebot_card1_text',
            'config'      => [
                'type'        => 'text',
                'cols'        => 50,
                'rows'        => 4,
                'eval'        => 'trim',
            ],
        ],

        'tx_merkursitepackage_angebot_card2_title' => [
            'label'       => $ll . 'pages.angebot_card2_title',
            'config'      => [
                'type'        => 'input',
                'size'        => 50,
                'max'         => 255,
                'eval'        => 'trim',
                'placeholder' => $ll . 'pages.angebot_card2_title.placeholder',
            ],
        ],

        'tx_merkursitepackage_angebot_card2_text' => [
            'label'       => $ll . 'pages.angebot_card2_text',
            'config'      => [
                'type'        => 'text',
                'cols'        => 50,
                'rows'        => 4,
                'eval'        => 'trim',
            ],
        ],

        'tx_merkursitepackage_angebot_card3_title' => [
            'label'       => $ll . 'pages.angebot_card3_title',
            'config'      => [
                'type'        => 'input',
                'size'        => 50,
                'max'         => 255,
                'eval'        => 'trim',
                'placeholder' => $ll . 'pages.angebot_card3_title.placeholder',
            ],
        ],

        'tx_merkursitepackage_angebot_card3_text' => [
            'label'       => $ll . 'pages.angebot_card3_text',
            'config'      => [
                'type'        => 'text',
                'cols'        => 50,
                'rows'        => 4,
                'eval'        => 'trim',
            ],
        ],

        // ── Contact / Kontakt fields ──────────────────────────────────────────

        'tx_merkursitepackage_contact_headline' => [
            'label'       => $ll . 'pages.contact_headline',
            'description' => $ll . 'pages.contact_headline.description',
            'config'      => [
                'type'        => 'input',
                'size'        => 50,
                'max'         => 255,
                'eval'        => 'trim',
                'placeholder' => $ll . 'pages.contact_headline.placeholder',
            ],
        ],

        'tx_merkursitepackage_contact_subline' => [
            'label'       => $ll . 'pages.contact_subline',
            'description' => $ll . 'pages.contact_subline.description',
            'config'      => [
                'type'        => 'text',
                'cols'        => 50,
                'rows'        => 3,
                'eval'        => 'trim',
                'placeholder' => $ll . 'pages.contact_subline.placeholder',
            ],
        ],

        'tx_merkursitepackage_contact_email' => [
            'label'       => $ll . 'pages.contact_email',
            'description' => $ll . 'pages.contact_email.description',
            'config'      => [
                'type'        => 'input',
                'size'        => 50,
                'max'         => 255,
                'eval'        => 'trim,email',
                'placeholder' => $ll . 'pages.contact_email.placeholder',
            ],
        ],

    ]);

    // Palette: CTA button text + link rendered side by side in the form
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'pages',
        'merkur_hero_cta',
        'tx_merkursitepackage_hero_button_text, tx_merkursitepackage_hero_button_link'
    );

    // Palette: Angebot card 1
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'pages',
        'merkur_angebot_card1',
        'tx_merkursitepackage_angebot_card1_title, tx_merkursitepackage_angebot_card1_text'
    );

    // Palette: Angebot card 2
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'pages',
        'merkur_angebot_card2',
        'tx_merkursitepackage_angebot_card2_title, tx_merkursitepackage_angebot_card2_text'
    );

    // Palette: Angebot card 3
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'pages',
        'merkur_angebot_card3',
        'tx_merkursitepackage_angebot_card3_title, tx_merkursitepackage_angebot_card3_text'
    );

    // Add Hero tab to page properties (doktype = 1)
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'pages',
        '--div--;' . $ll . 'pages.tab.hero'
        . ',tx_merkursitepackage_hero_headline'
        . ',tx_merkursitepackage_hero_subheadline'
        . ',--palette--;;merkur_hero_cta'
        . ',tx_merkursitepackage_hero_bg_image',
        '1',
        'after:--palette--;;title'
    );

    // Add Kontakt tab to page properties (doktype = 1)
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'pages',
        '--div--;' . $ll . 'pages.tab.contact'
        . ',tx_merkursitepackage_contact_headline'
        . ',tx_merkursitepackage_contact_subline'
        . ',tx_merkursitepackage_contact_email',
        '1',
        'after:--palette--;;title'
    );

    // Add Angebot tab to page properties (doktype = 1)
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'pages',
        '--div--;' . $ll . 'pages.tab.angebot'
        . ',tx_merkursitepackage_angebot_title'
        . ',tx_merkursitepackage_angebot_description'
        . ',--palette--;;merkur_angebot_card1'
        . ',--palette--;;merkur_angebot_card2'
        . ',--palette--;;merkur_angebot_card3',
        '1',
        'after:--palette--;;title'
    );
})();
