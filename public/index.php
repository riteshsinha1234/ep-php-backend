<?php
require_once '../src/EpornerAPI.php';
require_once '../src/VideoFetcher.php';

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        echo "Welcome to API-Master!";
        break;
    case '/search' :
        require __DIR__ . '/../routes/search.php';
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}
