<?php declare(strict_types=1);

namespace Vanilla;

/**
 * This is general data about the state of L10n for Firefox Desktop
 *
 * Localization is important for success outside of the anglo world so we need to make sure we are coverd.
 */
class FirefoxL10n
{
    /*
        The data should be revised regularly and depends on syncing with the l10n team and manually checking
        dictionaries we ship with, the upstream projects as well as AMO dictionaries section.
        The data is known as correct at the date below.

        The locales we care about are those we actually ship products for. There are WIP locales but they are out
        of the scope of this class.
    */
    protected $data_stamp = '2025-05-06';

    // Source: https://raw.githubusercontent.com/mozilla-firefox/firefox/refs/heads/release/browser/locales/shipped-locales
    public array $desktop_locales_release = [
        'ach', 'af', 'an', 'ar', 'ast', 'az', 'be', 'bg', 'bn', 'br', 'bs', 'ca', 'ca-valencia', 'cak', 'cs', 'cy', 'da',
        'de', 'dsb', 'el', 'en-CA', 'en-GB', 'en-US', 'eo', 'es-AR', 'es-CL', 'es-ES', 'es-MX', 'et', 'eu', 'fa', 'ff',
        'fi', 'fr', 'fur', 'fy-NL', 'ga-IE', 'gd', 'gl', 'gn', 'gu-IN', 'he', 'hi-IN', 'hr', 'hsb', 'hu', 'hy-AM', 'ia',
        'id', 'is', 'it', 'ja', 'ja-JP-mac', 'ka', 'kab', 'kk', 'km', 'kn', 'ko', 'lij', 'lt', 'lv', 'mk', 'mr', 'ms',
        'my', 'nb-NO', 'ne-NP', 'nl', 'nn-NO', 'oc', 'pa-IN', 'pl', 'pt-BR', 'pt-PT', 'rm', 'ro', 'ru', 'sat', 'sc',
        'sco', 'si', 'sk', 'skr', 'sl', 'son', 'sq', 'sr', 'sv-SE', 'szl', 'ta', 'te', 'tg', 'th', 'tl', 'tr', 'trs',
        'uk', 'ur', 'uz', 'vi', 'xh', 'zh-CN', 'zh-TW',
    ];

    // Source: https://raw.githubusercontent.com/mozilla-firefox/firefox/refs/heads/release/browser/locales/all-locales
    public array $desktop_locales_all = [
        'ach', 'af', 'an', 'ar', 'ast', 'az', 'be', 'bg', 'bn', 'bo', 'br', 'brx', 'bs', 'ca', 'ca-valencia', 'cak', 'ckb',
        'cs', 'cy', 'da', 'de', 'dsb', 'el', 'en-CA', 'en-GB', 'eo', 'es-AR', 'es-CL', 'es-ES', 'es-MX', 'et', 'eu', 'fa', 'ff',
        'fi', 'fr', 'fur', 'fy-NL', 'ga-IE', 'gd', 'gl', 'gn', 'gu-IN', 'he', 'hi-IN', 'hr', 'hsb', 'hu', 'hy-AM', 'hye', 'ia',
        'id', 'is', 'it', 'ja', 'ja-JP-mac', 'ka', 'kab', 'kk', 'km', 'kn', 'ko', 'lij', 'lo', 'lt', 'ltg', 'lv', 'meh', 'mk',
        'ml', 'mr', 'ms', 'my', 'nb-NO', 'ne-NP', 'nl', 'nn-NO', 'oc', 'pa-IN', 'pl', 'pt-BR', 'pt-PT', 'rm', 'ro', 'ru', 'sat',
        'sc', 'scn', 'sco', 'si', 'sk', 'skr', 'sl', 'son', 'sq', 'sr', 'sv-SE', 'szl', 'ta', 'te', 'tg', 'th', 'tl', 'tr',
        'trs', 'uk', 'ur', 'uz', 'vi', 'wo', 'xh', 'zh-CN', 'zh-TW'
    ];

    // Source:
    public array $firefox_fenix_locales = [

    ];

    public array $european_locales = [
        'an', 'ast', 'be', 'bg',  'br', 'bs', 'ca', 'ca-valencia', 'cs', 'cy', 'da', 'de', 'dsb', 'el', 'en-GB', 'es-ES',
        'et', 'eu', 'fi', 'fr', 'fur', 'fy-NL', 'ga-IE', 'gd', 'gl', 'hr', 'hsb', 'hu', 'hy-AM', 'is', 'it', 'kk', 'lij',
        'lt', 'lv', 'mk', 'nb-NO', 'nl', 'nn-NO', 'oc', 'pl', 'pt-PT', 'rm', 'ro', 'ru', 'sc', 'sco', 'sk', 'skr', 'sl',
        'sq', 'sr', 'sv-SE', 'tr', 'uk',
    ];

    public array $locale_names = [
        'ach'         => 'Acholi',
        'af'          => 'Afrikaans',
        'an'          => 'Aragonese',
        'ar'          => 'Arabic',
        'ast'         => 'Asturian',
        'az'          => 'Azerbaijani',
        'be'          => 'Belarusian',
        'bg'          => 'Bulgarian',
        'bn'          => 'Bengali',
        'bo'          => 'Tibetan',
        'br'          => 'Breton',
        'brx'         => 'Bodo',
        'bs'          => 'Bosnian',
        'ca'          => 'Catalan',
        'ca-valencia' => 'Catalan (Valencian)',
        'cak'         => 'Kaqchikel',
        'ckb'         => 'Central Kurdish', // needs update
        'cs'          => 'Czech',
        'cy'          => 'Welsh',
        'da'          => 'Danish',
        'de'          => 'German',
        'dsb'         => 'Lower Sorbian',
        'el'          => 'Greek',
        'en-CA'       => 'English (Canada)',
        'en-GB'       => 'English (UK)',
        'eo'          => 'Esperanto',
        'es-AR'       => 'Spanish (Argentina)',
        'es-CL'       => 'Spanish (Chile)',
        'es-ES'       => 'Spanish (Spain)',
        'es-MX'       => 'Spanish (Mexico)',
        'et'          => 'Estonian',
        'eu'          => 'Basque',
        'fa'          => 'Persian',
        'fi'          => 'Finnish',
        'ff'          => 'Fulah',
        'fr'          => 'French',
        'fur'         => 'Friulian',
        'fy-NL'       => 'Frisian',
        'ga-IE'       => 'Irish',
        'gd'          => 'Scottish Gaelic',
        'gl'          => 'Galician',
        'gn'          => 'Guarani',
        'gu-IN'       => 'Gujarati',
        'he'          => 'Hebrew',
        'hi-IN'       => 'Hindi',
        'hr'          => 'Croatian',
        'hsb'         => 'Upper Sorbian',
        'hy-AM'       => 'Armenian',
        'hye'         => 'Easter Armenian', // needs update
        'hu'          => 'Hungarian',
        'ia'          => 'Interlingua',
        'id'          => 'Indonesian',
        'is'          => 'Icelandic',
        'it'          => 'Italian',
        'ja'          => 'Japanese',
        'ja-JP-mac'   => 'Japanese (mac)',
        'ka'          => 'Georgian',
        'kab'         => 'Kabyle',
        'kk'          => 'Kazakh',
        'km'          => 'Khmer',
        'kn'          => 'Kannada',
        'ko'          => 'Korean',
        'ku'          => 'Kurdish',
        'lij'         => 'Ligurian',
        'lo'          => 'Lao',
        'lt'          => 'Lithuanian',
        'ltg'         => 'Latgalian',
        'lv'          => 'Latvian',
        'meh'         => 'Southwestern Tlaxiaco Mixtec',
        'mk'          => 'Macedonian',
        'ml'          => 'Malayalam',
        'mr'          => 'Marathi',
        'ms'          => 'Malay',
        'my'          => 'Burmese',
        'nb-NO'       => 'Norwegian Bokmål',
        'ne-NP'       => 'Nepali',
        'nn-NO'       => 'Norwegian Nynorsk',
        'nl'          => 'Dutch',
        'oc'          => 'Occitan',
        'pa-IN'       => 'Punjabi',
        'pl'          => 'Polish',
        'pt-BR'       => 'Portuguese (Brasil)',
        'pt-PT'       => 'Portuguese',
        'rm'          => 'Romantch',
        'ro'          => 'Romanian',
        'ru'          => 'Russian',
        'sat'         => 'Santali',
        'sc'          => 'Sardinian',
        'scn'         => 'Sicilian', // needs update
        'sco'         => 'Scots',
        'si'          => 'Sinhala',
        'sk'          => 'Slovak',
        'skr'         => 'Saraiki',
        'sl'          => 'Slovenian',
        'son'         => 'Songhay',
        'sq'          => 'Albanian',
        'sr'          => 'Serbian',
        'sv-SE'       => 'Swedish',
        'szl'         => 'Silesian',
        'ta'          => 'Tamil',
        'te'          => 'Telugu',
        'tg'          => 'Tajik',
        'th'          => 'Thai',
        'tl'          => 'Tagalog',
        'tr'          => 'Turkish',
        'trs'         => 'Triqui',
        'uk'          => 'Ukrainian',
        'ur'          => 'Urdu',
        'uz'          => 'Uzbek',
        'vi'          => 'Vietnamese',
        'wo'          => 'Wolof',
        'xh'          => 'Xhosa',
        'zh-CN'       => 'Chinese (Simplified)',
        'zh-TW'       => 'Chinese (Traditional)',
    ];

    public array $desktop_locales_not_shipped;

    public function __construct(public string $locale = 'fr')
    {
        $this->desktop_locales_not_shipped = array_diff(
            $this->desktop_locales_all,
            $this->desktop_locales_release
        );
    }

    /**
     * Return all the information we have for a locale code in this class
     */
    public function getLocale(): array
    {
        return [
            'code'       => $this->locale,
            'name'       => $this->locale_names[$this->locale],
            'dictionary' => new Dictionaries()->supported($this->locale),
            'european'   => in_array($this->locale, $this->european_locales),
        ];
    }
}