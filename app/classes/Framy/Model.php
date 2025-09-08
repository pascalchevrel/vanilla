<?php

declare(strict_types=1);

namespace Framy;

/**
 * This class defines which file contains the model called by the controller
 */
readonly class Model
{
    /** @var array<string, string> */
    public readonly array $list;

    public function __construct(public string $model) {
        $this->list = [
            'country'      => 'country.php',
            'dictionaries' => 'dictionaries.php',
            'home'         => 'home.php',
            'prefs'        => 'prefs.php',
        ];
    }

    /**
     * Return data from the model
     *
     * @codeCoverageIgnore
     */
    public function get(): mixed
    {
        return include MODELS . match ($this->model) {
            default => array_key_exists($this->model, $this->list)
                ? $this->list[$this->model]
                :  '404.php'
        };
    }
}