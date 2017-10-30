<?php

// the admin bot setup

include('./httpful.phar');
include('./functions.php');

// this is found at http://dev.groupme.com/bots
$bot_token = 4bc973b62c58247fe69b57b090;

// adds admin commands 
$isAdmin = TRUE;
include('adminFunctions.php');

include('./index.php');

?>
