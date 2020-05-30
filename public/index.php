<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "autoload.php";

if (!$requestUri = preg_replace(['#^/#', "#[?].*#"], "", server('REQUEST_URI'))) {
    $requestUri = DEFAULT_CONTROLLER;
}
$parts = explode("/", $requestUri);

$page = $parts[0];
$action = $parts[1] ?? "index";

$scriptName = PAGES_DIR . $page . "/" . $action . ".php";

if (file_exists($scriptName)) {
    include $scriptName;
} else {
    echo "Такой страницы нет!";
} 

?>