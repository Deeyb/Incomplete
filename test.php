<?php
include 'includes/classloader.inc.php';

$view = new View();
$view->displayHeader();
$view->indexView();
$view->displayFooter();
?>