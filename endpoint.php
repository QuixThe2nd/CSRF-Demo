<?php
// Start Session
session_start();
// End Request if CSRF Token is Valid
if($_SESSION['csrf'] != $_GET['csrf'])
    die('Invalid request sent. Try again.');
/*------------------------------------------------------
---- Everything under this runs if request is valid ----
------------------------------------------------------*/
// Delete CSRF Token (This is needed to prevent the same token from being used twice)
unset($_SESSION['csrf']);
// Output
echo 'Request successful';
