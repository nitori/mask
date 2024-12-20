<?php

use MASK\Mask\Enumeration\Tab;
use TYPO3\CMS\Core\Information\Typo3Version;

if ((new Typo3Version())->getMajorVersion() < 12) {
    $linkHandler = [
        'config.fieldControl.linkPopup.options.blindLinkOptions' => 12,
    ];
    $validation = [
        'config.eval.required' => 6,
        'config.fieldControl.linkPopup.options.allowedExtensions' => 6,
    ];
} else {
    $linkHandler = [
        'config.allowedTypes' => 12,
    ];
    $validation = [
        'config.required' => 6,
        'config.appearance.allowedFileExtensions' => 6,
    ];
}

return [
    Tab::GENERAL->value => [
        [
            'config.placeholder' => 6,
        ],
        [
            'config.size' => 6,
        ],
    ],
    Tab::VALIDATION->value => [
        $validation,
    ],
    Tab::FIELD_CONTROL->value => [
        $linkHandler,
    ],
    Tab::LOCALIZATION->value => [
        [
            'l10n_mode' => 12,
        ],
        [
            'config.behaviour.allowLanguageSynchronization' => 6,
        ],
    ],
    Tab::EXTENDED->value => [
        [
            (new Typo3Version())->getMajorVersion() > 11 ? 'config.nullable' : 'config.eval.null' => 6,
            'config.mode' => 6,
        ],
    ],
];
