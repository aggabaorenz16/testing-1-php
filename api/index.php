<?php
$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$pages = [
    '' => 'home.php',
    'home' => 'home.php',
    'about' => 'about.php',
    'project' => 'project.php',
    'experience' => 'experience.php',
    'contact' => 'contact.php',
];

if (!array_key_exists($path, $pages)) {
    http_response_code(404);
    echo 'Page not found.';
    exit;
}

require __DIR__ . '/../' . $pages[$path];
