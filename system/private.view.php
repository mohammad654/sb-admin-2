<?php
$viewTemplate = 'home';
$viewTitle = $systemName . ' ' . $systemVersion . ' ' . $date;
if (isset($view)) {
    if ($view=='overview') {
        $viewTemplate = 'overview';
        $viewTitle = 'Overview';
    } elseif ($view=='hallo') {
        $viewTemplate = 'hallo';
        $viewTitle = 'hallo';
    } elseif ($view=='demo') {
        $viewTemplate = 'demo';
        $viewTitle = 'demo';
    }
}

