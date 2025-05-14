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
                'licence' => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version' => '4.4.0', // outdated
                'note'    => 'https://sourceforge.net/p/bgoffice/code/HEAD/tree/trunk/Mozilla-spell-bg/ChangeLog',
            ],
            'br' => [
                'source'  => 'https://drouizig.org/correcteur/hunspell-breton/',
                'licence' => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version' => '0.14',
                'note'    => '',
            ],
            'ca' => [
                'source'  => 'https://github.com/Softcatala/catalan-dict-tools',
                'licence' => 'GPL-2.0 / LGPL-2.1',
                'version' => '2.5.0', // outdated
                'note'    => 'https://bugzilla.mozilla.org/show_bug.cgi?id=919910',
            ],
            'da' => [
                'source'  => 'https://stavekontrolden.dk/',
                'licence' => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version' => '2.7',
                'note'    => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1776186',
            ],
            'el' => [
                'source'  => 'https://addons.mozilla.org/fr/firefox/addon/greek-spellchecking-dictionary/',
                'licence' => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version' => '0.8.5.2',
                'note'    => 'Development repo unknown',
            ],
            'en-CA' => [
                'source'  => 'http://wordlist.aspell.net/',
                'licence' => 'BSD',
                'version' => '2020.12.07',
                'note'    => 'Same project source as en-US',
            ],
            'es-AR' => [
                'source'  => 'https://github.com/sbosio/rla-es/releases',
                'licence' => 'GPL-3.0 / LGPL-3.0 / MPL-1.1',
                'version' => '2.8', // Outdated
                'note'    => '',
            ],
            'es-CL' => [
                'source'  => 'https://github.com/sbosio/rla-es/releases',
                'licence' => 'GPL-3.0 / LGPL-3.0 / MPL-1.1',
                'version' => '2.8',
                'note'    => '',
            ],
            'es-ES' => [
                'source'  => 'https://github.com/sbosio/rla-es/releases',
                'licence' => 'GPL-3.0 / LGPL-3.0 / MPL-1.1',
                'version' => '2.8',
                'note'    => '',
            ],
            'es-MX' => [
                'source'  => 'https://github.com/sbosio/rla-es/releases',
                'licence' => 'GPL-3.0 / LGPL-3.0 / MPL-1.1',
                'version' => '2.8',
                'note'    => '',
            ],
            'et' => [
                'source'  => 'http://extensions.services.openoffice.org/en/project/dict_et',
                'licence' => 'LGPL-2.1',
                'version' => '1.0', // Outdated
                'note'    => 'Our version is from 2000, there seems to be a 2008 version',
            ],
            'fr' => [
                'source'  => '',
                'licence' => '',
                'version' => '',
                'note'    => '',
            ],
            'fy-NL' => [
                'source'  => '',
                'licence' => '',
                'version' => '',
                'note'    => '',
            ],
            'hu' => [
                'source'  => '',
                'licence' => '',
                'version' => '',
                'note'    => '',
            ],
            'id' => [
                'source'  => '',
                'licence' => '',
                'version' => '',
                'note'    => '',
            ],
            'ja' => [
                'source'  => '',
                'licence' => '',
                'version' => '',
                'note'    => '',
            ],
            'ku' => [
                'source'  => '',
                'licence' => '',
                'version' => '',
                'note'    => '',
            ],
            'lt' => [
                'source'  => '',
                'licence' => '',
                'version' => '',
                'note'    => '',
            ],
            'lv' => [
                'source'  => '',
                'licence' => '',
                'version' => '',
                'note'    => '',
            ],
            'mk' => [
                'source'  => '',
                'licence' => '',
                'version' => '',
                'note'    => '',
            ],
            'nl' => [
                'source'  => '',
                'licence' => '',
                'version' => '',
                'note'    => '',
            ],
            'pl' => [
                'source'  => '',
                'licence' => '',
                'version' => '',
                'note'    => '',
            ],
            'pt-BR' => [
                'source'  => '',
                'licence' => '',
                'version' => '',
                'note'    => '',
            ],
            'pt-PT' => [
                'source'  => '',
                'licence' => '',
                'version' => '',
                'note'    => '',
            ],
            'rm' => [
                'source'  => '',
                'licence' => '',
                'version' => '',
                'note'    => '',
            ],
            'ro' => [
                'source'  => '',
                'licence' => '',
                'version' => '',
                'note'    => '',
            ],
            'ru' => [
                'source'  => '',
                'licence' => '',
                'version' => '',
                'note'    => '',
            ],
            'sk' => [
                'source'  => '',
                'licence' => '',
                'version' => '',
                'note'    => '',
            ],
            'sr' => [
                'source'  => '',
                'licence' => '',
                'version' => '',
                'note'    => '',
            ],
            'sv-SE' => [
                'source'  => '',
                'licence' => '',
                'version' => '',
                'note'    => '',
            ],
            'uk' => [
                'source'  => '',
                'licence' => '',
                'version' => '',
                'note'    => '',
            ],
            'zh-TW' => [
                'source'  => '',
                'licence' => '',
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
     * Get the licence(s) of a dictionary
     */
    public function getLicence(string $locale): string
    {

        return $this->data['locales'][$locale]['licence'] ?? '';
    }

}