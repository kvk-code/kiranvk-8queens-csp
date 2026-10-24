<?php
// Cache-bust wrapper for 8-Queens CSP Visualizer
// Serves the HTML with proper headers
header('Cache-Control: no-cache, must-revalidate');
header('Content-Type: text/html; charset=UTF-8');
readfile(__DIR__ . '/game.html');
?>
