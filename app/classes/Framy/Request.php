<?php

declare(strict_types=1);

namespace Framy;

class Request
{
    public string $request = '/';
    public string $path = '/';
    public ?string $query = null;
    public bool $invalid_slashes = true;

    public function __construct(string $path)
    {
        $request = parse_url($path);

        // Paths that start with multiple slashes don't have a correct (or any) 'path' field via parse_url()
        if (str_starts_with($path, '//')) {
            $this->invalid_slashes = true;
        }

        // Real files are not processes as paths to route
        if ($request !== false) {
            // We sometimes use a fake query on a static asset to force the browser to refresh the cache,
            // we take the query out when checking if the file path exists
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . explode('?', $path)[0])) {
                $this->invalid_slashes = false;
                $this->path = explode('?', $path)[0];
            } else {
                // We have a real path to route and clean up before usage
                $this->request = $path;

                if (isset($request['path'])) {
                    $this->path = $this->cleanPath($request['path']);
                }

                if (isset($request['query'])) {
                    $this->query = $request['query'];
                }

                if (isset($request['path'])) {
                    if (str_ends_with($request['path'], '//')) {
                        // Multiple slashes at the end of the path
                        $this->invalid_slashes = true;
                    } elseif (! str_ends_with($request['path'], '/')) {
                        // Missing slash at the end of the path
                        $this->invalid_slashes = true;
                    } else {
                        $this->invalid_slashes = false;
                    }
                }
            }
        }
    }

    /**
     * Load the controller file
     * @codeCoverageIgnore
     */
    public function loadController(): void
    {
        include CONTROLLERS . $this->getController() . '.php';
    }

    /**
     * Return the name of the controller file for the requested URL
     * If the path is unknown, we send a 404 response
     */
    public function getController(): string
    {
        return match ($this->path) {
            '/'         => 'home',
            '/country/' => 'country',
            default     => '404',
        };
    }

    /**
     * Normalize path before comparing the string to a list of valid paths
     */
    public function cleanPath(string $path): string
    {
        if ($path == '/' || $path == '//') {
            return '/';
        }

        $path = explode('/', $path);
        $path = array_filter($path); // Remove empty items
        $path = array_values($path); // Reorder keys

        return '/' . implode('/', $path) . '/';
    }

    /**
     * Display a static page.
     * Send all the necessary headers to bypass http server caching
     * @codeCoverageIgnore
     */
    public static function waitingPage(string $action): void
    {
        if ($action == 'load') {
            // This is a long-running process when we fetch and generate data
            set_time_limit(0);
            // We need to set the encoding or the browser will wait to parse the content
            header('Content-type: text/html; charset=utf-8');
            // Explicitly disable caching so Varnish and other upstreams won't cache.
            header("Cache-Control: no-store, no-cache, must-revalidate, proxy-revalidate, max-age=0");
            // Emulate the header BigPipe sends so we can test through Varnish.
            header('Surrogate-Control: BigPipe/1.0');
            // Disable gzip compression to allow sending a chunk of html
            header('Content-Encoding: none');
            // Setting this header instructs Nginx to disable fastcgi_buffering and disable gzip for this request.
            header('X-Accel-Buffering: no');
            // Display a waiting page while we process data. This file contains the flushing logic.
            include VIEWS . 'waiting_page.html.php';
        } elseif ($action == 'leave') {
            // heavy processing is done, let the browser refresh the page
            echo '<meta http-equiv="refresh" content="0">';
            exit;
        } elseif ($action == 'hide') {
            // heavy processing is done, let the browser refresh the page
            echo '<style nonce="' . NONCE . '">.waitingpage .container { display:none; }</style>';
        }
    }
}
