<?php
if (!function_exists('public_html_path')) {
    function public_html_path($path = '') {
        return base_path('../public_html' . ($path ? DIRECTORY_SEPARATOR . $path : $path));
    }
}
