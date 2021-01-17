<?php
// Start Session
session_start();
// Generate CSRF Token
while($i!=64){
    $csrf .= substr('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890', mt_rand(0, 61), 1);
    $i++;
}
// Save CSRF Token
$_SESSION['csrf'] = $csrf;
// Output CSRF Token
echo '<a href="endpoint.php?csrf=' . $_SESSION['csrf'] . '">Open</a>';
