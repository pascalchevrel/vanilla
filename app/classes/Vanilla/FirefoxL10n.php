<?php

declare(strict_types=1);

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

    public array $firefox_locales = [
        'ach', 'af', 'an', 'ar', 'ast', 'az', 'be', 'bg', 'bn', 'br', 'bs', 'ca', 'ca-valencia', 'cak', 'cs', 'cy', 'da',
        'de', 'dsb', 'el', 'en-CA', 'en-GB', 'en-US', 'eo', 'es-AR', 'es-CL', 'es-ES', 'es-MX', 'et', 'eu', 'fa', 'ff',
        'fi', 'fr', 'fur', 'fy-NL', 'ga-IE', 'gd', 'gl', 'gn', 'gu-IN', 'he', 'hi-IN', 'hr', 'hsb', 'hu', 'hy-AM', 'ia',
        'id', 'is', 'it', 'ja', 'ja-JP-mac', 'ka', 'kab', 'kk', 'km', 'kn', 'ko', 'lij', 'lt', 'lv', 'mk', 'mr', 'ms',
        'my', 'nb-NO', 'ne-NP', 'nl', 'nn-NO', 'oc', 'pa-IN', 'pl', 'pt-BR', 'pt-PT', 'rm', 'ro', 'ru', 'sat', 'sc',
        'sco', 'si', 'sk', 'skr', 'sl', 'son', 'sq', 'sr', 'sv-SE', 'szl', 'ta', 'te', 'tg', 'th', 'tl', 'tr', 'trs',
        'uk', 'ur', 'uz', 'vi', 'xh', 'zh-CN', 'zh-TW',
    ];

    public array $european_locales = [
        'an', 'ast', 'be', 'bg',  'br', 'bs', 'ca', 'ca-valencia', 'cs', 'cy', 'da', 'de', 'dsb', 'el', 'en-GB', 'es-ES',
        'et', 'eu', 'fi', 'fr', 'fur', 'fy-NL', 'ga-IE', 'gd', 'gl', 'hr', 'hsb', 'hu', 'hy-AM', 'is', 'it', 'kk', 'lij',
        'lt', 'lv', 'mk', 'nb-NO', 'nl', 'nn-NO', 'oc', 'pl', 'pt-PT', 'rm', 'ro', 'ru', 'sc', 'sco', 'sk', 'skr', 'sl',
        'sq', 'sr', 'sv-SE', 'tr', 'uk',
    ];

    public array $locale_names = [
        'ast'         => 'Asturian',
        'bg'          => 'Bulgarian',
        'br'          => 'Breton',
        'ca'          => 'Catalan',
        'ca-valencia' => 'Catalan (Valancian)',
        'da'          => 'Danish',
        'el'          => 'Greek',
        'en-CA'       => 'English (Canada)',
        'es-AR'       => 'Spanish (Argentina)',
        'es-CL'       => 'Spanish (Chile)',
        'es-ES'       => 'Spanish (Spain)',
        'es-MX'       => 'Spanish (Mexico)',
        'et'          => 'Estonian',
        'eu'          => 'Basque',
        'fr'          => 'French',
        'fy-NL'       => 'Frisian',
        'gl'          => 'Galician',
        'hu'          => 'Hungarian',
        'id'          => 'Indonesian',
        'ja'          => 'Japanese',
        'ja-JP-mac'   => 'Japanese (mac)',
        'lt'          => 'Lithuanian',
        'lv'          => 'Latvian',
        'mk'          => 'Macedonian',
        'nl'          => 'Dutch',
        'pl'          => 'Polish',
        'pt-BR'       => 'Portuguese (Brasil)',
        'pt-PT'       => 'Portuguese (Portugal)',
        'rm'          => 'Romantch',
        'ro'          => 'Romanian',
        'ru'          => 'Russian',
        'sk'          => 'Slovak',
        'sr'          => 'Serbian',
        'sv-SE'       => 'Swedish',
        'uk'          => 'Ukrainian',
        'vi'          => 'Vietnamese',
        'zh-TW'       => 'Chinese (Traditional)',
    ];

    public array $locales_with_dictionary = [
        'bg', 'br', 'ca', 'da', 'el', 'en-CA', 'es-AR', 'es-CL', 'es-ES', 'es-MX',
        'et', 'fr', 'fy-NL', 'hu', 'id', 'ja', 'ja-JP-mac', 'lt', 'lv', 'mk', 'nl',
        'pl', 'pt-BR', 'pt-PT', 'rm', 'ro', 'ru', 'sk', 'sr', 'sv-SE', 'uk', 'vi',
        'zh-TW',
    ];

    protected array $euro_locales_with_dict;

    public function __construct(public string $locale = 'fr')
    {
        $this->euro_locales_with_dict = array_intersect(
            $this->locales_with_dictionary,
            $this->european_locales
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
            'dictionary' => in_array($this->locale, $this->euro_locales_with_dict),
            'european'   => in_array($this->locale, $this->european_locales),
        ];
    }
}