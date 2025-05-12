<?php

declare(strict_types=1);

namespace Framy;

class Json
{
    /**
     * @param  array<string, string> $data
     */
    public function __construct(
        public array $data = [],
        public mixed $jsonp = false,
        public bool $pretty_print = false,
    )
    {
    }

    /**
     * Return a JSON/JSONP representation of data with the right HTTP headers
     */
    public function output(): string
    {
        $json = $this->pretty_print ? json_encode($this->data, JSON_PRETTY_PRINT) : json_encode($this->data);
        $mime = 'application/json';

        if (is_string($this->jsonp)) {
            $mime = 'application/javascript';
            $json = $this->jsonp . '(' . $json . ')';
        }

        ob_start();
        header("access-control-allow-origin: *"); // * is OK as our Json API is public and readonly
        header("Content-type: {$mime}; charset=UTF-8");
        header("Content-Length: " . strlen($json));
        echo $json;
        $json = ob_get_contents();
        ob_end_clean();

        return $json;
    }

    /**
     * Return HTTP code 400 and an error message if an API call is incorrect
     */
    public function outputError(): string
    {
        $this->pretty_print = true;
        http_response_code(400);

        return $this->output();
    }

    /**
     * Output Json data
     */
    public function render(): void
    {
        if (array_key_exists('error', $this->data)) {
            echo $this->outputError();
        } else {
            $this->jsonp = $_GET['callback'] ?? false;
            echo $this->output();
        }
    }

    /**
     *  @return array<mixed> $template_data
     */
    public static function load(string $url): array
    {
        return self::toArray(self::getFile($url));
    }

    public static function getFile(string $url): string|bool
    {
        // Local file
        if (! isset(parse_url($url)['scheme'])) {
            // Does it exist ?
            if (! file_exists($url)) {
                return '';
            }
            return file_get_contents($url);
        }

       $options = [
            'http' => [
                'method'  => 'GET',
                'header'  =>   "Content-Type: application/json\r\n"
                             . "User-Agent: Mozilla/5.0 (X11; Linux x86_64; rv:140.0) Gecko/20100101 Firefox/140.0\r\n"
                             . "Referer: https://vanilla.pascalc.net",
            ],
        ];

        $data = file_get_contents(
            $url,
            false,
            stream_context_create($options)
        );

        return file_get_contents($url);
    }

    /**
     * Return an Array from a Json string
     * This is an utility function as we use json_decode in multiple places,
     * always with the same options. That will make these calls shorter,
     * with a more explicit function name and will allow to change default
     * values at the app level.
     *
     * @return array<mixed>  Associative array from a Json string
     */
    public static function toArray(string $data): array
    {
        $data = json_decode(
            json: $data,
            associative: true,
            depth: 512,
        );

        return is_null($data) ? [] : $data;
    }
}

