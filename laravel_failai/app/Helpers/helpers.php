<?php

if (!function_exists('custom_public_path')) {
    function custom_public_path($path = '')
    {
        return rtrim(app()->basePath('public'), '/') . ($path ? '/' . $path : $path);
    }
}
