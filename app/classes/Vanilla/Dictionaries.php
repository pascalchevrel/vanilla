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
        'date'    => '2026-05-26',
        'locales' => [
            'ar' => [
                'source'   => 'https://github.com/linuxscout/ayaspell/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '3.7',
                'status'   => Status::Added2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967733',
                'note'     => 'Not developed anymore but the only one available on the market with a tri-licence. No update in May 2026.',
                'checked'  => '2026-05',
            ],
            'ast' => [
                'source'   => 'https://addons.mozilla.org/en-US/firefox/addon/correutor_asturianu/versions/',
                'license'  => 'GPL-3.0',
                'version'  => '4.4.5',
                'status'   => Status::Incompatible,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2040221',
                'note'     => 'We could reach out to Softastur to relicense.',
                'checked'  => '2026-05',
            ],
            'bg' => [
                'source'   => 'https://sourceforge.net/p/bgoffice/code/623/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '4.4.5',
                'status'   => Status::Updated2026,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2039850',
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'bn' => [
                'source'   => 'https://addons.mozilla.org/en-US/firefox/addon/bn-bd-spellchecker/',
                'license'  => 'GPL-2.0',
                'version'  => '',
                'status'   => Status::Incompatible,
                'bug'      => '',
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'bo' => [
                'source'   => 'https://github.com/eroux/hunspell-bo/',
                'license'  => 'CC0',
                'version'  => '0.4.0',
                'status'   => Status::Added2026,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2040215',
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'br' => [
                'source'   => 'https://drouizig.org/correcteur/hunspell-breton/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '0.14',
                'status'   => Status::OK,
                'note'     => 'No update in May 2026.',
                'checked'  => '2026-05',
            ],
            'ca' => [
                'source'   => 'https://github.com/Softcatala/catalan-dict-tools/tags',
                'license'  => 'GPL-2.0 / LGPL-2.1',
                'version'  => '3.0.9',
                'status'   => Status::Updated2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967443',
                'note'     => 'https://bugzilla.mozilla.org/show_bug.cgi?id=919910. No update in May 2026.',
                'checked'  => '2026-05',
            ],
            'ca-valencia' => [
                'source'   => 'https://github.com/Softcatala/catalan-dict-tools/tags',
                'license'  => 'GPL-2.0 / LGPL-2.1',
                'version'  => '3.0.9',
                'status'   => Status::Added2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967778. No update in May 2026.',
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'cs' => [
                'source'   => 'https://gitlab.com/strepon/czech-cc0-dictionaries',
                'license'  => 'CCO',
                'version'  => '',
                'status'   => Status::Investigation,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2041632',
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'cy' => [
                'source'   => 'https://github.com/techiaith/hunspell-cy',
                'license'  => 'LGPL-3.0',
                'version'  => '25.03',
                'status'   => Status::Added2026,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2040025',
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'da' => [
                'source'   => 'https://stavekontrolden.dk/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '2.9.097',
                'status'   => Status::Updated2026,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2039848',
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'el' => [
                'source'   => 'https://addons.mozilla.org/fr/firefox/addon/greek-spellchecking-dictionary/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '0.9',
                'status'   => Status::Updated2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967704',
                'note'     => 'https://github.com/stevestavropoulos/elspell/commit/df4b4a3b7ba04c99aaabbff34f1bfa183844ff8b. No update in May 2026.',
                'checked'  => '2026-05',
            ],
            'en-CA' => [
                'source'   => 'http://wordlist.aspell.net/',
                'license'  => 'BSD',
                'version'  => '2020.12.07',
                'status'   => Status::OK,
                'note'     => 'Same project source as en-US',
                'checked'  => '2026-05',
            ],
            'en-GB' => [
                'source'   => 'https://github.com/marcoagpinto/aoo-mozilla-en-dict',
                'license'  => 'LGPL-3',
                'version'  => '2026.05.01',
                'status'   => Status::Added2026,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2041377',
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'es-AR' => [
                'source'   => 'https://github.com/sbosio/rla-es/releases',
                'license'  => 'GPL-3.0 / LGPL-3.0 / MPL-1.1',
                'version'  => '2.9',
                'status'   => Status::Updated2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967385',
                'note'     => 'No update in May 2026.',
                'checked'  => '2026-05',
            ],
            'es-CL' => [
                'source'   => 'https://github.com/sbosio/rla-es/releases',
                'license'  => 'GPL-3.0 / LGPL-3.0 / MPL-1.1',
                'version'  => '2.9',
                'status'   => Status::Updated2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967392',
                'note'     => 'No update in May 2026.',
                'checked'  => '2026-05',
            ],
            'es-ES' => [
                'source'   => 'https://github.com/sbosio/rla-es/releases',
                'license'  => 'GPL-3.0 / LGPL-3.0 / MPL-1.1',
                'version'  => '2.9',
                'status'   => Status::Updated2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967394',
                'note'     => 'No update in May 2026.',
                'checked'  => '2026-05',
            ],
            'es-MX' => [
                'source'   => 'https://github.com/sbosio/rla-es/releases',
                'license'  => 'GPL-3.0 / LGPL-3.0 / MPL-1.1',
                'version'  => '2.9',
                'status'   => Status::Updated2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1967396',
                'note'     => 'No update in May 2026.',
                'checked'  => '2026-05',
            ],
            'et' => [
                'source'   => 'http://extensions.services.openoffice.org/en/project/dict_et',
                'license'  => 'LGPL-2.1',
                'version'  => '1.0', // Outdated
                'status'   => Status::OK,
                'note'     => 'Dead project. No update in May 2026. The libreoffice version is the same, 282173 words',
                'checked'  => '2026-05',
            ],
            'fa' => [
                'source'   => 'https://github.com/b00f/lilak/',
                'license'  => 'Apache-2.0',
                'version'  => '3.3',
                'status'   => Status::Added2026,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2040228',
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'fi' => [
                'source'   => 'https://github.com/fginter/hunspell-fi/',
                'license'  => 'CC0',
                'version'  => '0.2',
                'status'   => Status::Candidate,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2040293',
                'note'     => 'Needs evaluation from a localizer',
                'checked'  => '2026-05',
            ],
            'fr' => [
                'source'   => 'https://grammalecte.net/#:~:text=MobileRead,Dictionnaires',
                'license'  => 'MPL-2.0',
                'version'  => '7.7',
                'status'   => Status::Updated2026,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2039898',
                'note'     => 'Dictionary: "Toutes variantes"',
                'checked'  => '2026-05',
            ],
            'fy-NL' => [
                'source'   => 'http://www.fryslan.frl/14718/feroardering-oangeande-de-offisjele-stavering-fan-de-fryske-taal-2014/',
                'license'  => 'Apache 2.0',
                'version'  => '20160722',
                'status'   => Status::Updated2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1966678',
                'note'     => 'Incompatible licence but relicenced to Apache 2.0. No update in May 2026.',
                'checked'  => '2026-05',
            ],
            'hr' => [
                'source'   => 'https://github.com/krunose/hunspell-hr/',
                'license'  => 'LGPL-2.1',
                'version'  => 'v2.1-20251229',
                'status'   => Status::Added2026,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2041294',
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'hi-IN' => [
                'source'   => 'https://github.com/Shreeshrii/hindi-hunspell',
                'license'  => 'GPL-3.0',
                'version'  => '',
                'status'   => Status::Incompatible,
                'bug'      => '',
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'hu' => [
                'source'   => 'https://github.com/laszlonemeth/magyarispell/',
                'license'  => 'MPL-2.0 / LGPL-3.0',
                'version'  => '1.9',
                'status'   => Status::Updated2026,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2039846',
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'hy-AM' => [
                'source'   => 'https://github.com/hyspell/HySpell_3.0.1/tree/master/Dictionaries',
                'license'  => 'MIT',
                'version'  => '3.0.1',
                'status'   => Status::Candidate,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2041326',
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'id' => [
                'source'   => 'https://github.com/shuLhan/hunspell-id/',
                'license'  => 'MPL-2.0 / LGPL-3.0',
                'version'  => '2.3.0', // Outdated
                'status'   => Status::Updated2026,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2040011',
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'it' => [
                'source'   => 'https://sourceforge.net/projects/linguistico/',
                'license'  => 'GPL-2.0',
                'version'  => '', // Outdated
                'status'   => Status::Incompatible,
                'bug'      => '',
                'note'     => 'Incompatible license',
                'checked'  => '2026-05',
            ],
            'ja' => [
                'source'   => 'http://wordlist.aspell.net/',
                'license'  => 'BSD',
                'version'  => '2020.12.07',
                'status'   => Status::English,
                'note'     => 'Same project source as en-US',
                'checked'  => '2026-05',
                'checked'  => '2026-05',
            ],
            'ka' => [
                'source'   => 'https://github.com/gamag/ka_GE.spell/tree/master',
                'license'  => 'MIT',
                'version'  => '0.1',
                'status'   => Status::Added2026,
                'note'     => 'Also on AMO (354 users). Looks stale but exists.',
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2040211',
                'checked'  => '2026-05',
            ],
            'kab' => [
                'source'   => 'https://addons.mozilla.org/fr/firefox/addon/imse%C9%A3ti-n-tira-n-teqbaylit/',
                'license'  => 'MIT?',
                'version'  => '',
                'status'   => Status::Investigation,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2041618',
                'note'     => 'Potentially integrate the extension if the license and source are clarified?',
                'checked'  => '2026-05',
            ],
            'km' => [
                'source'   => 'https://addons.mozilla.org/en-US/firefox/addon/khmer-sbbic-spelling-checker/',
                'license'  => 'No licence',
                'version'  => '',
                'status'   => Status::Incompatible,
                'note'     => 'also see https://sbbic.org/ as source',
                'checked'  => '2026-05',
            ],
            'ko' => [
                'source'   => 'https://github.com/spellcheck-ko/hunspell-dict-ko',
                'license'  => 'GPL-3.0',
                'version'  => '',
                'status'   => Status::Incompatible,
                'note'     => '.aff and .dic files are GPL 3. https://github.com/jihuichoi/korean-spellchecker is also not compatible: CC by 4.0',
                'checked'  => '2026-05',
            ],
            'ku' => [
                'source'   => 'https://addons.mozilla.org/en-US/firefox/addon/rastniv%C3%AEs/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '0.96',
                'status'   => Status::Unknown,
                'note'     => 'We don’t seem to still ship the ku locale, yet we still have the code in tree. . No update in May 2026.',
                'checked'  => '2026-05',
            ],
            'lt' => [
                'source'   => 'https://github.com/ispell-lt/ispell-lt/',
                'license'  => 'BSD',
                'version'  => '1.3.2',
                'status'   => Status::OK,
                'note'     => 'No update in May 2026.',
                'checked'  => '2026-05',
            ],
            'lv' => [
                'source'   => 'https://dict.dv.lv/download.php?prj=lv',
                'license'  => 'LGPL-2.1',
                'version'  => '1.5.0',
                'status'   => Status::Updated2026,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2039868',
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'mk' => [
                'source'   => 'https://wiki.mozilla.org/L10n:Dictionaries#Macedonian_[mk]',
                'license'  => '',
                'version'  => '',
                'status'   => Status::Removed2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1966699',
                'note'     => 'Removed for incompatible licence',
                'checked'  => '2025-05',
            ],
            'mr' => [
                'source'   => 'https://github.com/Shreeshrii/hindi-hunspell/tree/master',
                'license'  => '',
                'version'  => '',
                'status'   => Status::Incompatible,
                'bug'      => '',
                'note'     => 'A dictionary exists but it has no license',
                'checked'  => '2026-05',
            ],
            'nb-NO' => [
                'source'   => 'https://github.com/wooorm/dictionaries/blob/main/dictionaries/nb/readme.md',
                'license'  => 'GPL',
                'version'  => '',
                'status'   => Status::Incompatible,
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'nl' => [
                'source'   => 'https://github.com/OpenTaal/opentaal-hunspell',
                'license'  => 'BSD',
                'version'  => '2.20.19',
                'status'   => Status::OK,
                'note'     => 'No update in May 2026.',
                'checked'  => '2026-05',
            ],
            'nn-NO' => [
                'source'   => 'https://github.com/postgrespro/hunspell_dicts/tree/master/hunspell_nn_no',
                'license'  => 'GPL',
                'version'  => '',
                'status'   => Status::Incompatible,
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'oc' => [
                'source'   => 'https://dicodoc.eu/fr/tutoriels#tutocorr',
                'license'  => 'Closed source',
                'version'  => '',
                'status'   => Status::Incompatible,
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'pl' => [
                'source'   => 'https://sjp.pl/sl/en/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '2026-05-11',
                'status'   => Status::Updated2026,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2039841',
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'pt-BR' => [
                'source'   => 'https://addons.mozilla.org/pt-PT/firefox/addon/corretor/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '140.2025.142.1267', // alt dict? https://pt-br.libreoffice.org/projetos/vero
                'status'   => Status::Updated2025,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1968153',
                'note'     => '2026: no new version',
                'checked'  => '2026-05',
            ],
            'pt-PT' => [
                'source'   => '',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '20.10.5.1',
                'status'   => Status::OK,
                'note'     => 'Source: https://natura.di.uminho.pt/download/sources/Dictionaries/hunspell/LATEST/ . The site is dead, looks like Libreoffice has an updated one https://gerrit.libreoffice.org/c/dictionaries/+/192373?tab=comments . Dead project. No update in May 2026.',
                'checked'  => '2026-05',
            ],
            'rm' => [
                'source'   => 'www.liarumantscha.ch',
                'license'  => 'MIT',
                'version'  => '1.0',
                'status'   => Status::OK,
                'note'     => 'Dead project. No update in May 2026.',
                'checked'  => '2026-05',
            ],
            'ro' => [
                'source'   => 'https://sourceforge.net/projects/rospell/files/Romanian%20dictionaries/',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '3.3.10',
                'status'   => Status::OK,
                'note'     => 'Dead project. No update in May 2026.',
                'checked'  => '2026-05',
            ],
            'ru' => [
                'source'   => 'https://bugzilla.mozilla.org/show_bug.cgi?id=451409',
                'license'  => 'Custom, see source',
                'version'  => '1.2', // outdated see https://code.google.com/archive/p/hunspell-ru/
                'status'   => Status::Outdated,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2040224',
                'note'     => 'TODO, there are alternatives. Valentin wants to create a Mozilla directory.',
                'checked'  => '2025-05',
            ],
            'sl' => [
                'source'   => 'https://spell.linux.sk/hunspell-sk',
                'license'  => 'GPL-2.0 / LGPL-2.1',
                'version'  => '2025.01.02',
                'status'   => Status::Added2026,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2040227 ',
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'sk' => [
                'source'   => 'https://spell.linux.sk/hunspell-sk',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '2.03-0, 2009-12-05',
                'status'   => Status::OK,
                'note'     => 'Dead project. No update in May 2026.',
                'checked'  => '2026-05',
            ],
            'sr' => [
                'source'   => '',
                'license'  => 'GPL-2.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '2010-08-18',
                'status'   => Status::Unknown,
                'note'     => 'https://github.com/grakic/hunspell-sr?tab=readme-ov-file or https://devbase.net/dict-sr/ as alternatives?',
                'checked'  => '2026-05',
            ],
            'sv-SE' => [
                'source'   => 'https://github.com/yeager/hunspell-sv/',
                'license'  => 'LGPL-3.0',
                'version'  => 'de721f0f',
                'status'   => Status::Updated2026,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2039952',
                'note'     => 'Switched to a forked in 2026',
                'checked'  => '2026-05',
            ],
            'ta' => [
                'source'   => 'https://addons.mozilla.org/en-US/firefox/addon/thamizha-solthiruthi',
                'license'  => 'MPL-1.1',
                'version'  => '0.4',
                'status'   => Status::Added2026,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2041284',
                'note'     => 'Shipped in Chromium',
                'checked'  => '2026-05',
            ],
            'tg' => [
                'source'   => 'https://github.com/ImloYor/firefox-dictionary',
                'license'  => 'MIT',
                'version'  => '1.0.0',
                'status'   => Status::Added2026,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2040217',
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'tr' => [
                'source'   => 'https://github.com/selimsum/hunspell-tr-moz',
                'license'  => 'MPL-2.0',
                'version'  => '2.1.0',
                'status'   => Status::Added2026,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2040207',
                'note'     => 'Selim fork of https://bugzilla.mozilla.org/show_bug.cgi?id=2043244',
                'checked'  => '2026-05',
            ],
            'trs' => [
                'source'   => '',
                'license'  => '',
                'version'  => '',
                'status'   => Status::NoneFound,
                'bug'      => '',
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'uk' => [
                'source'   => 'https://github.com/brown-uk/dict_uk/releases',
                'license'  => 'GPL-3.0 / LGPL-2.1 / MPL-1.1',
                'version'  => '6.8.0',
                'status'   => Status::Updated2026,
                'note'     => 'Licence https://github.com/brown-uk/dict_uk/blob/master/distr/hunspell/header/README_uk_UA.txt',
                'checked'  => '2026-05',
            ],
            'ur' => [
                'source'   => 'https://addons.mozilla.org/en-US/firefox/addon/urdu-dictionary/versions/',
                'license'  => 'Unclear if MPL, GPL or LGPL.',
                'version'  => '6.8.0',
                'status'   => Status::Incompatible,
                'note'     => 'Licence is unclear, MPL on AMO but no licence file. Zip file on https://web.archive.org/web/20210701011650/https://codeplexarchive.blob.core.windows.net/archive/projects/UrduDictionary/UrduDictionary.zip says LGPL-2. Abandonned project.',
                'checked'  => '2026-05',
            ],
            'uz' => [
                'source'   => 'https://addons.mozilla.org/en-US/firefox/addon/uzbek-spell-checker/versions/',
                'license'  => 'GPL-2.0',
                'version'  => '',
                'status'   => Status::Incompatible,
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'vi' => [
                'source'   => 'https://github.com/1ec5/hunspell-vi',
                'license'  => 'GPL-3',
                'version'  => '',
                'status'   => Status::Removed2024,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=1912392',
                'note'     => 'No other option',
                'checked'  => '2026-05',
            ],
            'xh' => [
                'source'   => 'https://addons.mozilla.org/en-US/firefox/addon/xhosa-spell-checker/versions/',
                'license'  => 'LGPL-2.1',
                'version'  => '20110323.3',
                'status'   => Status::Added2026,
                'bug'      => 'https://bugzilla.mozilla.org/show_bug.cgi?id=2040208',
                'note'     => 'Old, 2004, but exists',
                'checked'  => '2026-05',
            ],
            'wo' => [
                'source'   => '',
                'license'  => '',
                'version'  => '',
                'status'   => Status::NoneFound,
                'bug'      => '',
                'note'     => '',
                'checked'  => '2026-05',
            ],
            'zh-CN' => [
                'source'   => '',
                'license'  => '',
                'version'  => '',
                'status'   => Status::NoneFound,
                'note'     => 'Could not find one',
                'checked'  => '2026-05',
            ],
            'zh-TW' => [
                'source'   => 'http://wordlist.aspell.net/',
                'license'  => 'BSD',
                'version'  => '2020.12.07',
                'status'   => Status::English,
                'note'     => 'Same project source as en-US',
                'checked'  => '2026-05',
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
            /* We don't ship Firefox in Kurdish anymore but we still have the dictionary in tree */
            return false;
        }

        if (in_array($locale, $this->supported_locales))  {
            if (
                   $this->data['locales'][$locale]['status'] === Status::Removed2024
                || $this->data['locales'][$locale]['status'] === Status::Removed2025
                || $this->data['locales'][$locale]['status'] === Status::Candidate
                || $this->data['locales'][$locale]['status'] === Status::Incompatible
                || $this->data['locales'][$locale]['status'] === Status::NoneFound
                || $this->data['locales'][$locale]['status'] === Status::Investigation
                || $this->data['locales'][$locale]['status'] === Status::English
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

        return $this->data['locales'][$locale]['status'] === Status::Outdated;
    }

    /**
     * Get the license(s) of a dictionary
     */
    public function getlicense(string $locale): string
    {
        return $this->data['locales'][$locale]['license'] ?? '';
    }
    /**
     * Get the Last check of a dictionary
     */
    public function lastChecked(string $locale): string
    {
        return $this->data['locales'][$locale]['checked'] ?? '';
    }
}