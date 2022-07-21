<?php

echo '<html>';
include 'global.init.php';
echo '<html>';
include 'block.header.php';
echo '<body>';
include 'block.navigation.php';
include 'page.view.' . $viewTemplate . '.php';
include 'block.footer.php';
echo '</body>';
echo '</html>';