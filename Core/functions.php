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

function view(string $path, array $attributes = []): void
{
    extract($attributes);

    require base_path('views/' . $path);
}
