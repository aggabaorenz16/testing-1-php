<?php
header('Content-Type: text/html; charset=UTF-8');

$pageTitle = $pageTitle ?? 'RenzDev Portfolio';
$activePage = $activePage ?? 'home';
$scriptPath = str_replace('\\', '/', $_SERVER['SCRIPT_NAME']);
$basePath = rtrim(str_replace('\\', '/', dirname($scriptPath)), '/');
$baseUrl = str_starts_with($scriptPath, '/api/') || $basePath === '' || $basePath === '/'
    ? '/'
    : $basePath . '/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $baseUrl ?>style/style.css">
    <title><?= htmlspecialchars($pageTitle) ?> | RenzDev Portfolio</title>
</head>
<body>
   <canvas id="galaxy-background" aria-hidden="true"></canvas>
   <header id="home">
    <nav class="navbar" aria-label="Main navigation">
        <div class="menu-container"><div class="navlink"><a href="<?= $baseUrl ?>home" class="<?= $activePage === 'home' ? 'active' : '' ?>">Home</a></div></div>
        <div class="menu-container"><div class="navlink"><a href="<?= $baseUrl ?>about" class="<?= $activePage === 'about' ? 'active' : '' ?>">About</a></div></div>
        <div class="menu-container"><div class="navlink"><a href="<?= $baseUrl ?>project" class="<?= $activePage === 'project' ? 'active' : '' ?>">Project</a></div></div>
        <div class="menu-container"><div class="navlink"><a href="<?= $baseUrl ?>experience" class="<?= $activePage === 'experience' ? 'active' : '' ?>">Experience</a></div></div>
        <div class="menu-container"><div class="navlink"><a href="<?= $baseUrl ?>contact" class="<?= $activePage === 'contact' ? 'active' : '' ?>">Contact</a></div></div>
    </nav>
   </header>
   <main class="page-content">
