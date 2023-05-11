<?php
$TITLE_MAP = [
    '404' => '404',
    'gruendung' => 'Neugründung',
    'home' => 'Startseite',
    'impressum' => 'Impressum',
    'tagung' => 'Tagung'
];

// Determine path or default to index if not given
$path = $_GET['path'] ?? 'home';

$title = $TITLE_MAP[$path];

// Include page parts in order
require_once 'header.php';

$filePath = "{$path}.php";
if (file_exists($filePath)) {
    require_once $filePath;
} else {
    // Show 404 page if requested page is not found
    require_once "404.php";
}

require_once "footer.php";
