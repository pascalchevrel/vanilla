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

        https://wiki.mozilla.org/L10n:Dictionaries
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
                'source'  => 'http://www.fryslan.frl/14718/feroardering-oangeande-de-offisjele-stavering-fan-de-fryske-taal-2014/',
                'license' => '',
                'version' => '20160722',
                'note'    => 'Dead project? No traces on the net. Is there an alternative?',
            ],
            'hu' => [
                'source'  => 'https://github.com/laszlonemeth/magyarispell/',
                'license' => 'MPL-2.0 / LGPL-3.0',
                'version' => '1.7 beta', // Outdated
                'note'    => '',
            ],
            'id' => [
                'source'  => '',
                'license' => 'MPL-2.0 / LGPL-3.0',
                'version' => '1.2', // Outdated
                'note'    => '',
            ],
            'ja' => [
                'source'  => 'http://wordlist.aspell.net/',
                'license' => 'BSD',
                'version' => '2020.12.07',
                'note'    => 'Same project source as en-US',
            ],
            'ku' => [
                'source'  => 'Not found (was http://ferheng.org)',
                'license' => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version' => '0.96',
                'note'    => '',
            ],
            'lt' => [
                'source'  => 'https://github.com/ispell-lt/ispell-lt/',
                'license' => 'BSD',
                'version' => '1.3.2',
                'note'    => '',
            ],
            'lv' => [
                'source'  => 'https://github.com/wooorm/dictionaries/blob/main/dictionaries/lv/',
                'license' => 'LGPL-2.1',
                'version' => '1.1.0', // outdated
                'note'    => '',
            ],
            'mk' => [
                'source'  => '??',
                'license' => '??',
                'version' => '??',
                'note'    => 'Where is this coming from?',
            ],
            'nl' => [
                'source'  => 'https://github.com/OpenTaal/opentaal-hunspell',
                'license' => 'BSD',
                'version' => '2.20.19',
                'note'    => '',
            ],
            'pl' => [
                'source'  => 'https://sjp.pl/sl/en/',
                'license' => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version' => '2017-10-30', // Outdated
                'note'    => '',
            ],
            'pt-BR' => [
                'source'  => 'https://addons.mozilla.org/pt-PT/firefox/addon/corretor/',
                'license' => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version' => '2018', // Outdated
                'note'    => '',
            ],
            'pt-PT' => [
                'source'  => '',
                'license' => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version' => '20.10.5.1',
                'note'    => '',
            ],
            'rm' => [
                'source'  => 'www.liarumantscha.ch',
                'license' => 'MIT',
                'version' => '1.0',
                'note'    => '',
            ],
            'ro' => [
                'source'  => 'https://sourceforge.net/projects/rospell/files/Romanian%20dictionaries/',
                'license' => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version' => '3.3.10',
                'note'    => '',
            ],
            'ru' => [
                'source'  => 'https://bugzilla.mozilla.org/show_bug.cgi?id=451409',
                'license' => 'Custom, see source',
                'version' => '1.2', // outdated see https://code.google.com/archive/p/hunspell-ru/
                'note'    => '',
            ],
            'sk' => [
                'source'  => 'https://spell.linux.sk/hunspell-sk',
                'license' => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version' => '2.03-0, 2009-12-05',
                'note'    => 'Dead project',
            ],
            'sr' => [
                'source'  => '',
                'license' => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version' => '??',
                'note'    => 'https://github.com/grakic/hunspell-sr?tab=readme-ov-file ?',
            ],
            'sv-SE' => [
                'source'  => 'https://addons.mozilla.org/en-US/firefox/addon/g%C3%B6rans-hemmasnickrade-ordli/',
                'license' => 'LGPL-3.0',
                'version' => '2014', // Outdated
                'note'    => 'https://bugzilla.mozilla.org/show_bug.cgi?id=962648',
            ],
            'uk' => [
                'source'  => 'https://github.com/brown-uk/dict_uk/releases',
                'license' => '??',
                'version' => '6.6.1',
                'note'    => 'Not clear if the licence is GPL, partially MPL',
            ],
            'zh-TW' => [
                'source'  => 'http://wordlist.aspell.net/',
                'license' => 'BSD',
                'version' => '2018.04.16 en-US', //outdated
                'note'    => 'Ships with en-US',
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