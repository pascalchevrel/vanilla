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
        'date'    => '2025-07-07',
        'locales' => [
            'ar' => [
                'source'   => 'https://github.com/linuxscout/ayaspell/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '3.7',
                'outdated' => Status::Added2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967733',
                'note'     => 'Not developed anymore but the only one available on the market with a tri-licence. No update in May 2026.',
            ],
            'bg' => [
                'source'   => 'https://sourceforge.net/p/bgoffice/code/623/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '4.4.3',
                'outdated' => Status::Updated2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967258',
                'note'     => 'Update in progress https://bugzilla.mozilla.org/show_bug.cgi?id=2039850',
            ],
            'br' => [
                'source'   => 'https://drouizig.org/correcteur/hunspell-breton/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '0.14',
                'outdated' => Status::OK,
                'note'     => 'No update in May 2026.',
            ],
            'ca' => [
                'source'   => 'https://github.com/Softcatala/catalan-dict-tools/tags',
                'license'  => 'GPL-2.0 / LGPL-2.1',
                'version'  => '3.0.9',
                'outdated' => Status::Updated2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967443',
                'note'     => 'https://bugzilla.mozilla.org/show_bug.cgi?id=919910. No update in May 2026.',
            ],
            'ca-valencia' => [
                'source'   => 'https://github.com/Softcatala/catalan-dict-tools/tags',
                'license'  => 'GPL-2.0 / LGPL-2.1',
                'version'  => '3.0.9',
                'outdated' => Status::Added2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967778. No update in May 2026.',
                'note'     => '',
            ],
            'cy' => [
                'source'   => 'https://github.com/techiaith/hunspell-cy',
                'license'  => 'LGPL-3.0',
                'version'  => '25.03',
                'outdated' => Status::WIP,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2040025',
                'note'     => '',
            ],
            'da' => [
                'source'   => 'https://stavekontrolden.dk/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '2.9',
                'outdated' => Status::Updated2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967457',
                'note'     => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2039848. Update in progress.',
            ],
            'el' => [
                'source'   => 'https://addons.mozilla.org/fr/firefox/addon/greek-spellchecking-dictionary/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '0.9',
                'outdated' => Status::Updated2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967704',
                'note'     => 'https://github.com/stevestavropoulos/elspell/commit/df4b4a3b7ba04c99aaabbff34f1bfa183844ff8b. No update in May 2026.',
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
                'outdated' => Status::Updated2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967385',
                'note'     => 'No update in May 2026.',
            ],
            'es-CL' => [
                'source'   => 'https://github.com/sbosio/rla-es/releases',
                'license'  => 'GPL-3.0 / LGPL-3.0 / MPL-1.1',
                'version'  => '2.9',
                'outdated' => Status::Updated2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967392',
                'note'     => 'No update in May 2026.',
            ],
            'es-ES' => [
                'source'   => 'https://github.com/sbosio/rla-es/releases',
                'license'  => 'GPL-3.0 / LGPL-3.0 / MPL-1.1',
                'version'  => '2.9',
                'outdated' => Status::Updated2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967394',
                'note'     => 'No update in May 2026.',
            ],
            'es-MX' => [
                'source'   => 'https://github.com/sbosio/rla-es/releases',
                'license'  => 'GPL-3.0 / LGPL-3.0 / MPL-1.1',
                'version'  => '2.9',
                'outdated' => Status::Updated2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967396',
                'note'     => 'No update in May 2026.',
            ],
            'et' => [
                'source'   => 'http://extensions.services.openoffice.org/en/project/dict_et',
                'license'  => 'LGPL-2.1',
                'version'  => '1.0', // Outdated
                'outdated' => Status::OK,
                'note'     => 'Dead project. No update in May 2026. The libreoffice version is the same, 282173 words',
            ],
            'fr' => [
                'source'   => 'https://grammalecte.net/#:~:text=MobileRead,Dictionnaires',
                'license'  => 'MPL-2.0',
                'version'  => '7.0',
                'outdated' => Status::OK,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1681167',
                'note'     => 'Update in progress https://bugzilla.mozilla.org/show_bug.cgi?id=20398981',
            ],
            'fy-NL' => [
                'source'   => 'http://www.fryslan.frl/14718/feroardering-oangeande-de-offisjele-stavering-fan-de-fryske-taal-2014/',
                'license'  => 'Apache 2.0',
                'version'  => '20160722',
                'outdated' => Status::Updated2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1966678',
                'note'     => 'Incompatible licence but relicenced to Apache 2.0. No update in May 2026.',
            ],
            'hu' => [
                'source'   => 'https://github.com/laszlonemeth/magyarispell/',
                'license'  => 'MPL-2.0 / LGPL-3.0',
                'version'  => '1.8.1',
                'outdated' => Status::Updated2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967288',
                'note'     => 'Update in progress https://bugzilla.mozilla.org/2039846',
            ],
            'id' => [
                'source'   => 'https://github.com/shuLhan/hunspell-id/',
                'license'  => 'MPL-2.0 / LGPL-3.0',
                'version'  => '1.2', // Outdated
                'outdated' => Status::Outdated,
                'bug'      => '',
                'note'     => 'Update in progress https://bugzilla.mozilla.org/show_bug.cgi?id=2040011',
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
            'ko' => [
                'source'   => 'https://github.com/spellcheck-ko/hunspell-dict-ko',
                'license'  => 'GPL-3.0',
                'version'  => '',
                'outdated' => Status::Incompatible,
                'note'     => '.aff and .dic files are GPL 3. Only project found for Korean.',
            ],
            'ku' => [
                'source'   => 'https://addons.mozilla.org/en-US/firefox/addon/rastniv%C3%AEs/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '0.96',
                'outdated' => Status::Unknown,
                'note'     => 'We don’t seem to still ship the ku locale, yet we still have the code in tree. . No update in May 2026.',
            ],
            'lt' => [
                'source'   => 'https://github.com/ispell-lt/ispell-lt/',
                'license'  => 'BSD',
                'version'  => '1.3.2',
                'outdated' => Status::OK,
                'note'     => 'No update in May 2026.',
            ],
            'lv' => [
                'source'   => 'https://dict.dv.lv/download.php?prj=lv',
                'license'  => 'LGPL-2.1',
                'version'  => '1.4.0',
                'outdated' => Status::Updated2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967651',
                'note'     => 'Update in progress https://bugzilla.mozilla.org/show_bug.cgi?id=2039868',
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
                'note'     => 'No update in May 2026.',
            ],
            'pl' => [
                'source'   => 'https://sjp.pl/sl/en/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '2025-03-01',
                'outdated' => Status::Updated2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967435',
                'note'     => 'Update in progress https://bugzilla.mozilla.org/2039841',
            ],
            'pt-BR' => [
                'source'   => 'https://addons.mozilla.org/pt-PT/firefox/addon/corretor/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '140.2025.142.1267', // alt dict? https://pt-br.libreoffice.org/projetos/vero
                'outdated' => Status::Updated2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1968153',
                'note'     => '2026: no new version',
            ],
            'pt-PT' => [
                'source'   => '',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '20.10.5.1',
                'outdated' => Status::OK,
                'note'     => 'Source: https://natura.di.uminho.pt/download/sources/Dictionaries/hunspell/LATEST/ . The site is dead, looks like Libreoffice has an updated one https://gerrit.libreoffice.org/c/dictionaries/+/192373?tab=comments . Dead project. No update in May 2026.',
            ],
            'rm' => [
                'source'   => 'www.liarumantscha.ch',
                'license'  => 'MIT',
                'version'  => '1.0',
                'outdated' => Status::OK,
                'note'     => 'Dead project. No update in May 2026.',
            ],
            'ro' => [
                'source'   => 'https://sourceforge.net/projects/rospell/files/Romanian%20dictionaries/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '3.3.10',
                'outdated' => Status::OK,
                'note'     => 'Dead project. No update in May 2026.',
            ],
            'ru' => [
                'source'   => 'https://bugzilla.mozilla.org/show_bug.cgi?id=451409',
                'license'  => 'Custom, see source',
                'version'  => '1.2', // outdated see https://code.google.com/archive/p/hunspell-ru/
                'outdated' => Status::Outdated,
                'note'     => 'TODO, there are alternatives',
            ],
            'sk' => [
                'source'   => 'https://spell.linux.sk/hunspell-sk',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '2.03-0, 2009-12-05',
                'outdated' => Status::OK,
                'note'     => 'Dead project. No update in May 2026.',
            ],
            'sr' => [
                'source'   => 'Similar to https://devbase.net/dict-sr/ ?',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '??',
                'outdated' => Status::Unknown,
                'note'     => 'https://github.com/grakic/hunspell-sr?tab=readme-ov-file ? . No update in May 2026.',
            ],
            'sv-SE' => [
                'source'   => 'https://addons.mozilla.org/en-US/firefox/addon/g%C3%B6rans-hemmasnickrade-ordli/',
                'license'  => 'LGPL-3.0',
                'version'  => '1.21',
                'outdated' => Status::Outdated,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967541',
                'note'     => 'Update in progress https://bugzilla.mozilla.org/show_bug.cgi?id=2039952',
            ],
            'uk' => [
                'source'   => 'https://github.com/brown-uk/dict_uk/releases',
                'license'  => 'GPL-3.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '6.8.0',
                'outdated' => Status::Updated2026,
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
        // Manually remove some locales for now
        $this->supported_locales = array_diff($this->supported_locales, ['cy', 'mk', 'vi', 'ko']);
    }


    public function getSupportedLocales() : array
    {
        $arr = [];
        foreach (array_keys($this->data['locales']) as $locale) {
            if ($this->supported($locale)) {
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