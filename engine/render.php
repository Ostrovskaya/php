<?php
function render(string $template, array $params = [])
{
    ob_start();
    extract($params);
    include VIEWS_DIR . "{$template}.php";
    return ob_get_clean();
}