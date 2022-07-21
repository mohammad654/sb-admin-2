
<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
$viewTitle='Index';


//$url = $_GET['url'];
//if (isset($url) && $url == 'buttons') {
//    include './buttons.php';
//} else {
//    echo '';
//}

include './block.header.php';
include './block.sidebar.php';
include './block.navigation.php';

include 'home.php';

include './script.php';
include "./block.footer.php";

echo '</html>';



