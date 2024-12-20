<?php

use MASK\Mask\Enumeration\Tab;

return [
    Tab::GENERAL->value => [
        [
            'cTypes' => 12,
        ],
    ],
    Tab::VALIDATION->value => [
        [
            'config.minitems' => 6,
            'config.maxitems' => 6,
        ],
    ],
    Tab::APPEARANCE->value => [
        [
            'config.appearance.newRecordLinkTitle' => 6,
            'config.appearance.levelLinksPosition' => 6,
        ],
        [
            'config.appearance.expandSingle' => 6,
        ],
    ],
    Tab::LOCALIZATION->value => [
        [
            'l10n_mode' => 12,
        ],
        [
            'config.behaviour.allowLanguageSynchronization' => 6,
        ],
        [
            'config.appearance.showSynchronizationLink' => 6,
            'config.appearance.showPossibleLocalizationRecords' => 6,
            'config.appearance.showAllLocalizationLink' => 6,
            'config.appearance.showRemovedLocalizationRecords' => 6,
        ],
    ],
];
