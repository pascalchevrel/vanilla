<?php

declare(strict_types=1);

namespace Vanilla;

/**
 * This class contains all the uinformation we have about our shipping dictionaries
 */
class Dictionaries
{
    /*
        The data should be revised regularly and depends on syncing with the l10n team and manually checking
        dictionaries we ship with, the upstream projects as well as AMO dictionaries section.
        The data is known as correct at the date below.
    */
    public array $data = [
        'date'    => '2025-05-14',
        'locales' => [
            'bg' => [
                'source'  => 'https://sourceforge.net/p/bgoffice/code/623/',
                'license' => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version' => '4.4.0', // outdated
                'note'    => 'https://sourceforge.net/p/bgoffice/code/HEAD/tree/trunk/Mozilla-spell-bg/ChangeLog',
            ],
            'br' => [
                'source'  => 'https://drouizig.org/correcteur/hunspell-breton/',
                'license' => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version' => '0.14',
                'note'    => '',
            ],
            'ca' => [
                'source'  => 'https://github.com/Softcatala/catalan-dict-tools',
                'license' => 'GPL-2.0 / LGPL-2.1',
                'version' => '2.5.0', // outdated
                'note'    => 'https://bugzilla.mozilla.org/show_bug.cgi?id=919910',
            ],
            'da' => [
                'source'  => 'https://stavekontrolden.dk/',
                'license' => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version' => '2.7',
                'note'    => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1776186',
            ],
            'el' => [
                'source'  => 'https://addons.mozilla.org/fr/firefox/addon/greek-spellchecking-dictionary/',
                'license' => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version' => '0.8.5.2',
                'note'    => 'Development repo unknown',
            ],
            'en-CA' => [
                'source'  => 'http://wordlist.aspell.net/',
                'license' => 'BSD',
                'version' => '2020.12.07',
                'note'    => 'Same project source as en-US',
            ],
            'es-AR' => [
                'source'  => 'https://github.com/sbosio/rla-es/releases',
                'license' => 'GPL-3.0 / LGPL-3.0 / MPL-1.1',
                'version' => '2.8', // Outdated
                'note'    => '',
            ],
            'es-CL' => [
                'source'  => 'https://github.com/sbosio/rla-es/releases',
                'license' => 'GPL-3.0 / LGPL-3.0 / MPL-1.1',
                'version' => '2.8',
                'note'    => '',
            ],
            'es-ES' => [
                'source'  => 'https://github.com/sbosio/rla-es/releases',
                'license' => 'GPL-3.0 / LGPL-3.0 / MPL-1.1',
                'version' => '2.8',
                'note'    => '',
            ],
            'es-MX' => [
                'source'  => 'https://github.com/sbosio/rla-es/releases',
                'license' => 'GPL-3.0 / LGPL-3.0 / MPL-1.1',
                'version' => '2.8',
                'note'    => '',
            ],
            'et' => [
                'source'  => 'http://extensions.services.openoffice.org/en/project/dict_et',
                'license' => 'LGPL-2.1',
                'version' => '1.0', // Outdated
                'note'    => 'Our version is from 2000, there seems to be a 2008 version',
            ],
            'fr' => [
                'source'  => 'https://grammalecte.net/#:~:text=MobileRead,Dictionnaires',
                'license' => 'MPL-2.0',
                'version' => '7.0',
                'note'    => '',
            ],
            'fy-NL' => [
                'source'  => '',
                'license' => '',
                'version' => '20160722',
                'note'    => '',
            ],
            'hu' => [
                'source'  => '',
                'license' => '',
                'version' => '',
                'note'    => '',
            ],
            'id' => [
                'source'  => '',
                'license' => '',
                'version' => '',
                'note'    => '',
            ],
            'ja' => [
                'source'  => '',
                'license' => '',
                'version' => '',
                'note'    => '',
            ],
            'ku' => [
                'source'  => '',
                'license' => '',
                'version' => '',
                'note'    => '',
            ],
            'lt' => [
                'source'  => '',
                'license' => '',
                'version' => '',
                'note'    => '',
            ],
            'lv' => [
                'source'  => '',
                'license' => '',
                'version' => '',
                'note'    => '',
            ],
            'mk' => [
                'source'  => '',
                'license' => '',
                'version' => '',
                'note'    => '',
            ],
            'nl' => [
                'source'  => '',
                'license' => '',
                'version' => '',
                'note'    => '',
            ],
            'pl' => [
                'source'  => '',
                'license' => '',
                'version' => '',
                'note'    => '',
            ],
            'pt-BR' => [
                'source'  => '',
                'license' => '',
                'version' => '',
                'note'    => '',
            ],
            'pt-PT' => [
                'source'  => '',
                'license' => '',
                'version' => '',
                'note'    => '',
            ],
            'rm' => [
                'source'  => '',
                'license' => '',
                'version' => '',
                'note'    => '',
            ],
            'ro' => [
                'source'  => '',
                'license' => '',
                'version' => '',
                'note'    => '',
            ],
            'ru' => [
                'source'  => '',
                'license' => '',
                'version' => '',
                'note'    => '',
            ],
            'sk' => [
                'source'  => '',
                'license' => '',
                'version' => '',
                'note'    => '',
            ],
            'sr' => [
                'source'  => '',
                'license' => '',
                'version' => '',
                'note'    => '',
            ],
            'sv-SE' => [
                'source'  => '',
                'license' => '',
                'version' => '',
                'note'    => '',
            ],
            'uk' => [
                'source'  => '',
                'license' => '',
                'version' => '',
                'note'    => '',
            ],
            'zh-TW' => [
                'source'  => '',
                'license' => '',
                'version' => '',
                'note'    => '',
            ],
        ],
    ];

    public array $supported_locales;

    public function __construct() {
        $this->supported_locales = array_keys($this->data['locales']);
    }

    /**
     * Do we ship a dictionary for this locale
     */
    public function supported(string $locale): bool
    {
        return in_array($locale, $this->supported_locales);
    }
    /**
     * Get the license(s) of a dictionary
     */
    public function getlicense(string $locale): string
    {

        return $this->data['locales'][$locale]['license'] ?? '';
    }

}