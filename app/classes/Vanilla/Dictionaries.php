<?php declare(strict_types=1);

namespace Vanilla;
use Vanilla\enumStatus as Status;

/**
 * This class contains all the information we have about our shipping dictionaries
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
        'date'    => '2025-05-21',
        'locales' => [
            'ar' => [
                'source'   => '',
                'license'  => '',
                'version'  => '',
                'outdated' => Status::Candidate,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967733',
                'note'     => '',
            ],
            'bg' => [
                'source'   => 'https://sourceforge.net/p/bgoffice/code/623/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '4.4.3',
                'outdated' => Status::Updated,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967258',
                'note'     => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967258',
            ],
            'br' => [
                'source'   => 'https://drouizig.org/correcteur/hunspell-breton/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '0.14',
                'outdated' => Status::OK,
                'note'     => '',
            ],
            'ca' => [
                'source'   => 'https://github.com/Softcatala/catalan-dict-tools/tags',
                'license'  => 'GPL-2.0 / LGPL-2.1',
                'version'  => '3.0.9',
                'outdated' => Status::Updated,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967443',
                'note'     => 'https://bugzilla.mozilla.org/show_bug.cgi?id=919910',
            ],
            'ca-valencia' => [
                'source'   => '',
                'license'  => '',
                'version'  => '',
                'outdated' => Status::Candidate,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967778',
                'note'     => '',
            ],
            'da' => [
                'source'   => 'https://stavekontrolden.dk/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '2.9',
                'outdated' => Status::Updated,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967457',
                'note'     => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1776186',
            ],
            'el' => [
                'source'   => 'https://addons.mozilla.org/fr/firefox/addon/greek-spellchecking-dictionary/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '0.9',
                'outdated' => Status::Updated,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967704',
                'note'     => 'https://github.com/stevestavropoulos/elspell/commit/df4b4a3b7ba04c99aaabbff34f1bfa183844ff8b',
            ],
            'en-CA' => [
                'source'   => 'http://wordlist.aspell.net/',
                'license'  => 'BSD',
                'version'  => '2020.12.07',
                'outdated' => Status::OK,
                'note'     => 'Same project source as en-US',
            ],
            'es-AR' => [
                'source'   => 'https://github.com/sbosio/rla-es/releases',
                'license'  => 'GPL-3.0 / LGPL-3.0 / MPL-1.1',
                'version'  => '2.9',
                'outdated' => Status::Updated,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967385',
                'note'     => '',
            ],
            'es-CL' => [
                'source'   => 'https://github.com/sbosio/rla-es/releases',
                'license'  => 'GPL-3.0 / LGPL-3.0 / MPL-1.1',
                'version'  => '2.9',
                'outdated' => Status::Updated,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967392',
                'note'     => '',
            ],
            'es-ES' => [
                'source'   => 'https://github.com/sbosio/rla-es/releases',
                'license'  => 'GPL-3.0 / LGPL-3.0 / MPL-1.1',
                'version'  => '2.9',
                'outdated' => Status::Updated,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967394',
                'note'     => '',
            ],
            'es-MX' => [
                'source'   => 'https://github.com/sbosio/rla-es/releases',
                'license'  => 'GPL-3.0 / LGPL-3.0 / MPL-1.1',
                'version'  => '2.9',
                'outdated' => Status::Updated,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967396',
                'note'     => '',
            ],
            'et' => [
                'source'   => 'http://extensions.services.openoffice.org/en/project/dict_et',
                'license'  => 'LGPL-2.1',
                'version'  => '1.0', // Outdated
                'outdated' => Status::OK,
                'note'     => 'The libreoffice version is the same, 282173 words',
            ],
            'fr' => [
                'source'   => 'https://grammalecte.net/#:~:text=MobileRead,Dictionnaires',
                'license'  => 'MPL-2.0',
                'version'  => '7.0',
                'outdated' => Status::OK,
                'note'     => '',
            ],
            'fy-NL' => [
                'source'   => 'http://www.fryslan.frl/14718/feroardering-oangeande-de-offisjele-stavering-fan-de-fryske-taal-2014/',
                'license'  => 'Apache 2.0',
                'version'  => '20160722',
                'outdated' => Status::Updated,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1966678',
                'note'     => 'Incompatible licence but relicenced to Apache 2.0',
            ],
            'hu' => [
                'source'   => 'https://github.com/laszlonemeth/magyarispell/',
                'license'  => 'MPL-2.0 / LGPL-3.0',
                'version'  => '1.8.1',
                'outdated' => Status::Updated,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967288',
                'note'     => '',
            ],
            'id' => [
                'source'   => '',
                'license'  => 'MPL-2.0 / LGPL-3.0',
                'version'  => '1.2', // Outdated
                'outdated' => Status::Outdated,
                'note'     => '',
            ],
            'ja' => [
                'source'   => 'http://wordlist.aspell.net/',
                'license'  => 'BSD',
                'version'  => '2020.12.07',
                'outdated' => Status::OK,
                'note'     => 'Same project source as en-US',
            ],
            'ja-JP-mac' => [
                'source'   => 'http://wordlist.aspell.net/',
                'license'  => 'BSD',
                'version'  => '2020.12.07',
                'outdated' => Status::OK,
                'note'     => 'Same project source as en-US',
            ],
            'ku' => [
                'source'   => 'https://addons.mozilla.org/en-US/firefox/addon/rastniv%C3%AEs/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '0.96',
                'outdated' => Status::Unknown,
                'note'     => 'We don’t seem to still ship the ku locale, yet we still have the code in tree.',
            ],
            'lt' => [
                'source'   => 'https://github.com/ispell-lt/ispell-lt/',
                'license'  => 'BSD',
                'version'  => '1.3.2',
                'outdated' => Status::OK,
                'note'     => '',
            ],
            'lv' => [
                'source'   => 'https://dict.dv.lv/download.php?prj=lv',
                'license'  => 'LGPL-2.1',
                'version'  => '1.4.0',
                'outdated' => Status::OK,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967651',
                'note'     => '',
            ],
            'mk' => [
                'source'   => 'https://wiki.mozilla.org/L10n:Dictionaries#Macedonian_[mk]',
                'license'  => '',
                'version'  => '',
                'outdated' => Status::Removed2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1966699',
                'note'     => 'Removed for incompatible licence',
            ],
            'nl' => [
                'source'   => 'https://github.com/OpenTaal/opentaal-hunspell',
                'license'  => 'BSD',
                'version'  => '2.20.19',
                'outdated' => Status::OK,
                'note'     => '',
            ],
            'pl' => [
                'source'   => 'https://sjp.pl/sl/en/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '2025-03-01',
                'outdated' => Status::Updated,
                'bug'     => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967435',
                'note'     => '',
            ],
            'pt-BR' => [
                'source'   => 'https://addons.mozilla.org/pt-PT/firefox/addon/corretor/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '123.2024.16.151', // alt dict? https://pt-br.libreoffice.org/projetos/vero
                'outdated' => Status::OK,
                'note'     => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1874992',
            ],
            'pt-PT' => [
                'source'   => '',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '20.10.5.1',
                'outdated' => Status::OK,
                'note'     => '',
            ],
            'rm' => [
                'source'   => 'www.liarumantscha.ch',
                'license'  => 'MIT',
                'version'  => '1.0',
                'outdated' => Status::OK,
                'note'     => '',
            ],
            'ro' => [
                'source'   => 'https://sourceforge.net/projects/rospell/files/Romanian%20dictionaries/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '3.3.10',
                'outdated' => Status::OK,
                'note'     => '',
            ],
            'ru' => [
                'source'   => 'https://bugzilla.mozilla.org/show_bug.cgi?id=451409',
                'license'  => 'Custom, see source',
                'version'  => '1.2', // outdated see https://code.google.com/archive/p/hunspell-ru/
                'outdated' => Status::Outdated,
                'note'     => '',
            ],
            'sk' => [
                'source'   => 'https://spell.linux.sk/hunspell-sk',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '2.03-0, 2009-12-05',
                'outdated' => Status::OK,
                'note'     => 'Dead project',
            ],
            'sr' => [
                'source'   => '',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '??',
                'outdated' => Status::Unknown,
                'note'     => 'https://github.com/grakic/hunspell-sr?tab=readme-ov-file ?',
            ],
            'sv-SE' => [
                'source'   => 'https://addons.mozilla.org/en-US/firefox/addon/g%C3%B6rans-hemmasnickrade-ordli/',
                'license'  => 'LGPL-3.0',
                'version'  => '1.21',
                'outdated' => Status::Updated,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967541',
                'note'     => 'https://bugzilla.mozilla.org/show_bug.cgi?id=962648',
            ],
            'uk' => [
                'source'   => 'https://github.com/brown-uk/dict_uk/releases',
                'license'  => 'GPL-3.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '6.6.1',
                'outdated' => Status::OK,
                'note'     => 'Licence https://github.com/brown-uk/dict_uk/blob/master/distr/hunspell/header/README_uk_UA.txt',
            ],
            'vi' => [
                'source'   => '',
                'license'  => '',
                'version'  => '',
                'outdated' => Status::Removed2024,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1912392',
                'note'     => '',
            ],
            'zh-TW' => [
                'source'   => 'http://wordlist.aspell.net/',
                'license'  => 'BSD',
                'version'  => '2020.12.07',
                'outdated' => Status::OK,
                'note'     => 'Same project source as en-US',
            ],
        ],
    ];

    public array $supported_locales;

    public function __construct() {
        $this->supported_locales = array_keys($this->data['locales']);
    }


    public function getSupportedLocales() : array
    {
        $arr = [];
        // var_dump(array_keys($this->data['locales']));die;
        foreach (array_keys($this->data['locales']) as $locale) {
            if ($this->supported($locale)) {
            // die($locale);
                $arr[] = $locale;
            }
        }

        return $arr;
    }

    /**
     * Do we ship a dictionary for this locale
     */
    public function supported(string $locale): bool
    {
        if ($locale === 'ku') {
            /* We don't ship Firefox in Kurdish anymore but we still have the dictionary ion tree */
            return true;
        }

        /* If if was removed then return false */
        if (in_array($locale, $this->supported_locales))  {
            if (
                $this->data['locales'][$locale]['outdated'] === Status::Removed2024
                || $this->data['locales'][$locale]['outdated'] === Status::Removed2025
                || $this->data['locales'][$locale]['outdated'] === Status::Candidate
            ) {
                return false;
            }
        }

        return in_array($locale, $this->supported_locales);
    }

    /**
     * Is the dictionary outdated
     */
    public function isOutdated(string $locale): bool
    {
        /* if we don't ship with a dictionary, it can't be outdated */
        if (! $this->supported($locale)) {
            return false;
        }

        return $this->data['locales'][$locale]['outdated'] === Status::Outdated;
    }

    /**
     * Get the license(s) of a dictionary
     */
    public function getlicense(string $locale): string
    {
        return $this->data['locales'][$locale]['license'] ?? '';
    }
}