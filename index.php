<?php
$TITLE_MAP = [
    'home' => 'Startseite',
    'about' => 'Über uns',
    'calender' => 'Kalender',
    'archive' => 'Archiv',
    'contact' => 'Kontakt',
    'impressum' => 'Impressum',
    'tagung' => 'Tagung'
];

// Determine path or default to index if not given
$path = $_GET['path'] ?? 'home';

$filePath = "{$path}.php";
$title = null;
if (!file_exists($filePath)) {
    // Show 404 page if requested page is not found
    $filePath = '404.php';
    $title = '404';
}

if (!$title) {
    $title = $TITLE_MAP[$path];
}

// Include page parts in order
require_once 'header.php';
require_once 'navbar.php';
require_once $filePath;

require_once "footer.php";
