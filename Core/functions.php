<?php

use Core\Response;

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

function urlIs(string $value): bool
{
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    return $uri === $value;
}

function abort(int $code = 404): void
{
    http_response_code($code);

    require base_path("views/$code.php");

    die();
}

function authorize(bool $condition, $status = Response::FORBIDDEN): void
{
    if (!$condition) {
        abort($status);
    }
}

function base_path(string $path): string
{
    return BASE_PATH . $path;
}

function view(string $path, array $attributes = [])
{
    extract($attributes);

    return require base_path('views/' . $path);
}
